from fastapi import FastAPI
from pydantic import BaseModel
import mysql.connector
from fastapi.middleware.cors import CORSMiddleware

app = FastAPI()

# Permitir peticiones desde el frontend
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# ==========================
# MODELOS
# ==========================

class RegisterData(BaseModel):
    nombre: str
    email: str
    password: str
    rol: str

class LoginData(BaseModel):
    email: str
    password: str
    rol: str


# ==========================
# CONEXIÓN A MYSQL
# ==========================

def get_connection():
    return mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="gestion_empresarial"
    )


# ==========================
# REGISTRO DE USUARIO
# ==========================

@app.post("/register")
def registrar_usuario(data: RegisterData):
    try:
        conn = get_connection()
        cursor = conn.cursor()

        sql = """
        INSERT INTO usuarios (nombre, email, password, rol)
        VALUES (%s, %s, %s, %s)
        """

        valores = (data.nombre, data.email, data.password, data.rol)

        cursor.execute(sql, valores)
        conn.commit()

        cursor.close()
        conn.close()

        return {
            "status": "ok",
            "mensaje": "Usuario registrado correctamente"
        }

    except mysql.connector.Error as err:
        return {
            "status": "error",
            "mensaje": str(err)
        }


# ==========================
# LOGIN
# ==========================

@app.post("/login")
def login_usuario(data: LoginData):
    try:
        conn = get_connection()
        cursor = conn.cursor(dictionary=True)

        sql = """
        SELECT * FROM usuarios
        WHERE email = %s AND password = %s AND rol = %s
        """

        valores = (data.email, data.password, data.rol)

        cursor.execute(sql, valores)
        usuario = cursor.fetchone()

        cursor.close()
        conn.close()

        if usuario:
            return {
                "status": "ok",
                "mensaje": "Login correcto",
                "usuario": usuario
            }
        else:
            return {
                "status": "error",
                "mensaje": "Credenciales incorrectas"
            }

    except mysql.connector.Error as err:
        return {
            "status": "error",
            "mensaje": str(err)
        }