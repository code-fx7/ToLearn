1. Build Docker Image
docker build -t node-server .
2. Image starten
docker run -d -p 3000:3000 -e MESSAGE='Hello World!' node-server
3. Ausgabe aufrufen
curl hattp://localhost:3000

Docker Image umbennen 
docker tag alterimagename:neuerimagename