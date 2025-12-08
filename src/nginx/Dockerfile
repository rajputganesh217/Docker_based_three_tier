# frontend/Dockerfile
FROM nginx:alpine

# Remove the default Nginx config to prevent conflicts
RUN rm /etc/nginx/conf.d/default.conf

# Copy your custom config and index.html
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY index.html /usr/share/nginx/html/
