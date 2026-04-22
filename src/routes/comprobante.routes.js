const express = require('express');
const router = express.Router();
const controller = require('../controllers/comprobante.controller');

router.get('/', controller.getComprobantes);
router.post('/', controller.createComprobante);

module.exports = router;