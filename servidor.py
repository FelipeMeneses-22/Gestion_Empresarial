from fastapi import FastAPI
from pydantic import BaseModel
import mysql.connector
from fastapi.middleware.cors import CORSMiddleware

app = FastAPI()

@app.get("/")
def inicio():
    return {"mensaje": "Servidor funcionando"}

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
    correo: str   
    contrasena: str 
    rol: int


class LoginData(BaseModel):
    correo: str
    contrasena: str
    rol: int


# ==========================
# CONEXIÓN A MYSQL
# ==========================

def get_connection():
    return mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="proyecto_db" 
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
        INSERT INTO usuarios (nombre, correo, contrasena, rol)
        VALUES (%s, %s, %s, %s)
        """

        valores = (data.nombre, data.correo, data.contrasena, data.rol)

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
        WHERE correo = %s AND contrasena = %s AND rol = %s
        """

        valores = (data.correo, data.contrasena, data.rol)

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
    
