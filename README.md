# 🧮 PHP Calculator (Dockerized)

A simple PHP-based calculator running in a Docker container.
| Category                    | Technologies                                                            |
| --------------------------- | ----------------------------------------------------------------------- |
| **Frontend**                | HTML5, CSS3, JavaScript (Fetch API for AJAX)                            |
| **Backend**                 | PHP 8.2 (Core calculation logic)                                        |
| **Web Server**              | Apache (via official PHP-Apache Docker image)                           |
| **Containerization**        | Docker, Docker Compose                                                  |
| **Development Environment** | VS Code Terminal / PHP built-in server (`php -S localhost:8080 -t src`) |
| **Version Control**         | Git & GitHub                                                            |
# 🧮 PHP Calculator


## 📋 Prerequisites

- Windows host machine with VirtualBox installed.
- Ubuntu virtual machine set up in VirtualBox.
- FileZilla for transferring files between Windows and Ubuntu VM.

## 🔄 Migration from Windows to Ubuntu VM

### Step 1: Transfer Project Files

1. Install FileZilla on your Windows host.
2. Set up SSH on your Ubuntu VM if not already configured (e.g., install OpenSSH server).
3. In FileZilla, connect to your Ubuntu VM using SFTP (host: VM IP, username: your VM user, password: your VM password).
4. Transfer the entire project folder (`php-calculator-docker-main`) from Windows to a directory on Ubuntu VM (e.g., `/home/user/php-calculator`).

### Step 2: Dependency Installation on Ubuntu

#### System-Level Packages

Install required system packages:

```bash
sudo apt update
sudo apt install -y apache2 php8.2 php8.2-cli php8.2-common php8.2-mbstring php8.2-xml php8.2-zip
```

Enable Apache and PHP modules if necessary:

```bash
sudo a2enmod php8.2
sudo systemctl enable apache2
sudo systemctl start apache2
```

#### Python Dependencies

This project is PHP-based and does not require Python dependencies. However, if you need to set up a virtual environment for any future Python scripts, follow these steps:

1. Install Python and pip:

```bash
sudo apt install -y python3 python3-pip python3-venv
```

2. Create a virtual environment:

```bash
python3 -m venv venv
source venv/bin/activate
```

3. Install dependencies from `requirements.txt` (currently empty for this project):

```bash
pip install -r requirements.txt
```

Note: The `requirements.txt` file has been created but is empty as no Python dependencies are required.

### Step 3: Project Execution

#### On Windows (Before Migration)

1. Ensure PHP is installed on Windows (download from php.net or use XAMPP).
2. Clone or create project:

```bash
git clone <repo-url> php-calculator
cd php-calculator
```

3. Run the project:

```bash
php -S localhost:8080 -t src
```

4. Open `http://localhost:8080` in your browser.

#### On Ubuntu VM (After Migration)

1. Navigate to the project directory on Ubuntu:

```bash
cd /path/to/php-calculator
```

2. Copy project files to Apache web root (optional, for production-like setup):

```bash
sudo cp -r src/* /var/www/html/
sudo chown -R www-data:www-data /var/www/html/
```

3. Run the project using PHP built-in server:

```bash
php -S localhost:8080 -t src
```

4. Access the application:
   - If using PHP built-in server: Open `http://localhost:8080` in your browser (may need to configure port forwarding in VirtualBox).
   - If copied to Apache: Open `http://localhost` or the VM's IP in your browser.

## 🚀 Run Locally with Docker (Optional)

If you prefer using Docker (not required for migration):

Use the appropriate command based on your operating system:

```bash
# On Ubuntu / Linux
docker-compose up -d

# On Windows
docker compose up -d

1. Clone or create project:
   ```bash
   git clone <repo-url> php-calculator
   cd php-calculator


## 🚀 How to Run
## 🚀 Run Locally with Docker

Use the appropriate command based on your operating system:

```bash
# On Ubuntu / Linux
docker-compose up -d

# On Windows
docker compose up -d

1. Clone or create project:
   ```bash
   git clone <repo-url> php-calculator
   cd php-calculator


