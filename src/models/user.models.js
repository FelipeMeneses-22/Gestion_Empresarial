// src/models/usuario.model.js
const db = require('../config/db'); // tu conexión

const UsuarioModel = {

  getAll: async () => {
    const [rows] = await db.query("SELECT * FROM usuarios");
    return rows;
  },

  getById: async (id) => {
    const [rows] = await db.query(
      "SELECT * FROM usuarios WHERE id_usuario = ?",
      [id]
    );
    return rows[0];
  },

  create: async ({ nombre, correo, contrasena, rol }) => {
    const [result] = await db.query(
      `INSERT INTO usuarios (nombre, correo, contrasena, rol)
       VALUES (?, ?, ?, ?)`,
      [nombre, correo, contrasena, rol]
    );

    return {
      id: result.insertId,
      nombre,
      correo,
      rol
    };
  }

};

module.exports = UsuarioModel;