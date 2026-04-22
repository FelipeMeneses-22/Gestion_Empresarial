// src/controllers/usuario.controller.js
const UsuarioModel = require('../models/usuario.model');

// GET /api/usuarios
const getAll = async (req, res) => {
  try {
    const data = await UsuarioModel.getAll();
    res.json({ ok: true, data });
  } catch (err) {
    res.status(500).json({ ok: false, msg: err.message });
  }
};

// GET /api/usuarios/:id
const getById = async (req, res) => {
  try {
    const data = await UsuarioModel.getById(req.params.id);
    if (!data) {
      return res.status(404).json({ ok: false, msg: 'Usuario no encontrado' });
    }
    res.json({ ok: true, data });
  } catch (err) {
    res.status(500).json({ ok: false, msg: err.message });
  }
};

// POST /api/usuarios
const create = async (req, res) => {
  try {
    const { nombre, correo, contrasena, rol } = req.body;

    if (!nombre || !correo || !contrasena) {
      return res.status(400).json({
        ok: false,
        msg: 'nombre, correo y contrasena son requeridos'
      });
    }

    const data = await UsuarioModel.create({
      nombre,
      correo,
      contrasena,
      rol
    });

    res.status(201).json({ ok: true, data });

  } catch (err) {
    res.status(500).json({ ok: false, msg: err.message });
  }
};

module.exports = { getAll, getById, create };