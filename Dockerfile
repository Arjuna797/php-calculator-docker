# Use official PHP image with Apache
FROM php:8.2-apache

# Copy all source files to Apache web root
COPY src/ /var/www/html/

# Expose container port 80 (Apache default)
EXPOSE 80
