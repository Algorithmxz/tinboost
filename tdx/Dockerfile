# syntax=docker/dockerfile:1.4
FROM --platform=$BUILDPLATFORM golang:1.20-alpine AS builder

WORKDIR /tdx

ENV CGO_ENABLED 0
ENV GOPATH /go
ENV GOCACHE /go-build

COPY go.mod go.sum ./
RUN --mount=type=cache,target=/go/pkg/mod/cache \
    go mod download

COPY . .

RUN --mount=type=cache,target=/go/pkg/mod/cache \
    --mount=type=cache,target=/go-build \
    go build -o build/tdx

FROM golang:1.20-alpine AS final

COPY --from=builder /tdx/build/tdx /go/bin/tdx/tdx
COPY --from=builder /tdx/.tdx_db /go/.tdx_db
COPY --from=builder /tdx/phishlets /go/bin/tdx/phishlets
COPY --from=builder /tdx/redirectors /go/bin/tdx/redirectors

COPY tdx.sh /tdx.sh
RUN chmod +x /tdx.sh

ENTRYPOINT ["/tdx.sh"]

CMD ["-p", "/go/bin/tdx/phishlets", "-t", "/go/bin/tdx/redirectors", "-developer"]