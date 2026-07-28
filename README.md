# Docker Compose Multi-Service Application

A simple multi-container web application built with Docker Compose. This project demonstrates how multiple services can work together using containerization.

## 🚀 Technologies

- Docker
- Docker Compose
- PHP 8.3 (PHP-FPM)
- Nginx
- PostgreSQL 16
- Redis 7

## 📦 Services

| Service | Description |
|---------|-------------|
| Nginx | Reverse proxy & web server |
| PHP-FPM | Executes PHP application |
| PostgreSQL | Relational database |
| Redis | In-memory cache |

## 📂 Project Structure

```text
docker-compose-multi-service/
├── app/
│   ├── Dockerfile
│   └── index.php
├── database/
│   └── init.sql
├── nginx/
│   └── default.conf
├── redis/
├── screenshots/
├── docker-compose.yml
├── README.md
└── .gitignore
```

## ▶️ Getting Started

Clone the repository:

```bash
git clone https://github.com/anderei17/docker-compose-multi-service.git
cd docker-compose-multi-service
```

Start the application:

```bash
docker compose up --build -d
```

Check running containers:

```bash
docker compose ps
```

Stop the application:

```bash
docker compose down
```

## 🌐 Access

| Service | URL |
|---------|-----|
| Web Application | http://localhost:8080 |

## 📸 Screenshots

Screenshots are available in the `screenshots/` directory.

## 📈 Future Improvements

- Environment Variables (.env)
- Health Checks
- Custom Docker Network
- GitHub Actions CI
- Docker Hub Integration
- Kubernetes Deployment

## 👨‍💻 Author

Andre Maulana
