package main

import (
	"gorm.io/driver/mysql"
	"gorm.io/gorm"
)

type Animal struct {
	ID   int `gorm:"primaryKey"`
	Name string
}

func main() {
	dbConnection()
}

func dbConnection() error {
	dsn := "root:root@tcp(localhost:3306)/larapetdb?charset=utf8mb4&parseTime=True&loc=Local"
	db, err := gorm.Open(mysql.Open(dsn), &gorm.Config{})
	if err != nil {
		panic(err)
	}
	db.AutoMigrate(&Animal{})
	return nil
}
