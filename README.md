# php-calculator-docker
A lightweight PHP + JavaScript web calculator containerized with Docker. Features a dynamic frontend, simple backend logic, and cross-platform setup for local or containerized deployment.
## 🚀 Run Locally with Docker
| Category                    | Technologies                                                            |
| --------------------------- | ----------------------------------------------------------------------- |
| **Frontend**                | HTML5, CSS3, JavaScript (Fetch API for AJAX)                            |
| **Backend**                 | PHP 8.2 (Core calculation logic)                                        |
| **Web Server**              | Apache (via official PHP-Apache Docker image)                           |
| **Containerization**        | Docker, Docker Compose                                                  |
| **Development Environment** | VS Code Terminal / PHP built-in server (`php -S localhost:8080 -t src`) |
| **Version Control**         | Git & GitHub                                                            |

Use the appropriate command based on your operating system:

```bash
# On Ubuntu / Linux
docker-compose up -d

# On Windows
docker compose up -d
