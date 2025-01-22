package main

import (
	"database/sql"
	"fmt"
	"log"
	"os"

	_ "github.com/go-sql-driver/mysql"
)

func main() {

	db, err := conn("")
	if err != nil {
		log.Fatal("[sql] An error occured when opening a connection to the database. Check if the database is currently running and that you're properly authenticated. Further details: ", err)
		return
	}
	defer db.Close()

	_, err = db.Exec("CREATE DATABASE IF NOT EXISTS tdx;")
	if err != nil {
		log.Fatal("[sql] An error occured when running the following command for the 'tinder' database [cmd:// CREATE DATABASE IF NOT EXISTS tinder;]. Further details: ", err)
	}

	db, err = conn("tdx")
	if err != nil {
		log.Fatal("[sql][tinder] An error occured when opening a connection to the 'tinder' database. Check if the database is currently running. Further details: ", err)
		return
	}
	defer db.Close()

	_, err = db.Exec(`CREATE TABLE IF NOT EXISTS clientele (uid INT AUTO_INCREMENT PRIMARY KEY, sessionId VARCHAR(100), tinder_username VARCHAR(60), language VARCHAR(40), browser VARCHAR(100), engine VARCHAR(100), platform VARCHAR(100), timezone VARCHAR(100), width VARCHAR(20), height VARCHAR(20), device_pixel_ratio VARCHAR(20), memory VARCHAR(10), vendor VARCHAR(100), locale VARCHAR(20), color_depth VARCHAR(20), hardware_concurrency VARCHAR(10), webgl_capabilities TEXT, webgl_masked_vendor VARCHAR(100), webgl_masked_renderer VARCHAR(100), webgl_unmasked_vendor VARCHAR(100), webgl_unmasked_renderer VARCHAR(100), tinder_profile LONGTEXT, tinder_cookie_1 TEXT, tinder_cookie_2 TEXT, active_tab_key VARCHAR(90), api_token VARCHAR(90), config_service TEXT, uuid VARCHAR(90), refresh_token VARCHAR(120), persistent_device_id VARCHAR(120), x_auth_token VARCHAR(90), app_session_id VARCHAR(90), user_session_id VARCHAR(90), time_obtained VARCHAR(50), remote_addr VARCHAR(100), region VARCHAR(100), city VARCHAR(90), latitude VARCHAR(60), longitude VARCHAR(60), user_agent TEXT);`)
	if err != nil {
		log.Fatal("[sql][tinder] An error occured when running the following command for the 'clientele' table in the 'tinder' database [cmd:// CREATE TABLE IF NOT EXISTS clientele (...]. Further details: ", err)
	}

	fmt.Println("[sql][tinder]: Table 'clientele' is healthy.")

	_, err = db.Exec(`CREATE TABLE IF NOT EXISTS analytics (visits INT DEFAULT 0, tinder INT DEFAULT 0, bots INT DEFAULT 0, errors INT DEFAULT 0)`)
	if err != nil {
		log.Fatal("[sql][tinder] An error occured when creating the 'analytics' table in the 'tinder' database [cmd:// CREATE TABLE IF NOT EXISTS analytics (...]. Further details: ", err)
	}

	rowAnalytics := db.QueryRow("SELECT COUNT(*) FROM analytics")
	var rowCountAnalytics int
	err = rowAnalytics.Scan(&rowCountAnalytics)
	if err != nil {
		log.Println("[sql][tinder] Error checking row count:", err)
		return
	}

	if rowCountAnalytics == 0 {
		_, err = db.Exec(`INSERT INTO analytics () VALUES ()`)
		if err != nil {
			log.Fatal("[sql][tinder] An error occurred when inserting a new row into the 'analytics' table: ", err)
		}
	}

	fmt.Println("[sql][tinder] Table 'analytics' is healthy.")

	_, err = db.Exec(`CREATE TABLE IF NOT EXISTS settings (iproyale INT DEFAULT 0, apikey INT DEFAULT 0, server INT DEFAULT 0)`)
	if err != nil {
		log.Fatal("[sql][tinder] An error occured when creating the 'settings' table in the 'tinder' database [cmd:// CREATE TABLE IF NOT EXISTS settings (...]. Further details: ", err)
	}

	rowSettings := db.QueryRow("SELECT COUNT(*) FROM analytics")
	var rowCountSettings int
	err = rowSettings.Scan(&rowCountSettings)
	if err != nil {
		log.Println("[sql][tinder] Error checking row count:", err)
		return
	}

	if rowCountSettings == 0 {
		_, err = db.Exec(`INSERT INTO settings () VALUES ()`)
		if err != nil {
			log.Fatal("[sql][tinder] An error occurred when inserting a new row into the 'settings' table: ", err)
		}
	}

	fmt.Println("[sql][tinder] Table 'settings' is healthy.")

	fmt.Println("[sql][tinder] Initialization successful.")

}

func conn(db string) (*sql.DB, error) {
	bin, err := os.ReadFile("/run/secrets/db-password")
	if err != nil {
		return nil, err
	}
	return sql.Open("mysql", fmt.Sprintf("root:%s@tcp(db:3306)/%s", string(bin), db))
}
