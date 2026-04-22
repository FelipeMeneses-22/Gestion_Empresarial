const mysql = require("mysql2/promise");
require("dotenv").config();

// Pool de conexiones para el sistema de tienda
const pool = mysql.createPool({
  host: process.env.DB_HOST,
  port: process.env.DB_PORT,
  user: process.env.DB_USER,
  password: process.env.DB_PASSWORD,
  database: process.env.DB_NAME,

  // Número de conexiones simultáneas (optimizado para proyecto académico)
  connectionLimit: process.env.DB_POOL_LIMIT || 10,

  // Espera si no hay conexiones disponibles
  waitForConnections: true,
});

// Verificación de conexión al iniciar la API
const testConnection = async () => {
  try {
    const connection = await pool.getConnection();
    console.log("Conexión exitosa a la base de datos de la tienda");

    // Importante: devolver la conexión al pool
    connection.release();
  } catch (error) {
    console.error("Error al conectar con la base de datos:", error.message);

    // Detiene la aplicación si la BD no funciona
    process.exit(1);
  }
};

testConnection();

module.exports = pool;