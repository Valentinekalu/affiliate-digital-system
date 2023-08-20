-- Create Users table
CREATE TABLE Users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(100),
    username VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(100),
    user_type ENUM('Admin', 'Publisher', 'Advertiser'),
    country VARCHAR(50),
    state VARCHAR(50),
    city VARCHAR(50),
    address VARCHAR(200),
    phone VARCHAR(20),
    profile_picture_url VARCHAR(200),
    registration_date DATETIME,
    last_updated_date DATETIME,
    user_status ENUM('Active', 'Inactive')
);

-- Create EmailVerifications table
CREATE TABLE EmailVerifications (
    verification_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    verification_token VARCHAR(100),
    verification_expiry DATETIME,
    is_verified BOOLEAN,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

-- Create Publishers table
CREATE TABLE Publishers (
    publisher_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    company_name VARCHAR(100),
    website_url VARCHAR(200),
    contact_info VARCHAR(200),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

-- Create Advertisers table
CREATE TABLE Advertisers (
    advertiser_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    company_name VARCHAR(100),
    contact_info VARCHAR(200),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

-- Create Admins table
CREATE TABLE Admins (
    admin_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

-- Create Campaigns table
CREATE TABLE Campaigns (
    campaign_id INT PRIMARY KEY AUTO_INCREMENT,
    advertiser_id INT,
    campaign_name VARCHAR(100),
    start_date DATETIME,
    end_date DATETIME,
    budget DECIMAL(10, 2),
    status ENUM('Active', 'Paused', 'Completed'),
    FOREIGN KEY (advertiser_id) REFERENCES Advertisers(advertiser_id)
);

-- Create other tables like Ads, Impressions, Clicks, etc.
