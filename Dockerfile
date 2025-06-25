FROM php:8.2-cli

WORKDIR /app

# Copy all files
COPY . .

# Expose port
EXPOSE 8080

# Start PHP server
CMD ["php", "-S", "0.0.0.0:8080"] 