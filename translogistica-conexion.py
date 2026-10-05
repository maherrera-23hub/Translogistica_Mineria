from sqlalchemy import create_engine, text
import pandas as pd

#CONFIGURACIÓN DE LA BASE DE DATOS


DB_HOST = "localhost"
DB_PORT = "3306"
DB_USER = "root"
DB_PASSWORD = ""
DB_NAME = "translogistica_db"



#FUNCIÓN DE CONEXIÓN

def conexion_sqlalchemy():

    try:
        #crear URL de conexión
        database_url = (
            f"mysql+pymysql://{DB_USER}:{DB_PASSWORD}"
            f"@{DB_HOST}:{DB_PORT}/{DB_NAME}"
        )

        #crear motor
        engine = create_engine(database_url)

        #abrir conexión
        with engine.connect() as connection:

            print("=" * 60)
            print("CONEXIÓN EXITOSA")
            print("=" * 60)

           
            #Comprobar base de datos

            resultado = connection.execute(
                text("SELECT DATABASE(), USER();")
            )

            db_actual, usuario_actual = resultado.fetchone()

            print(f"Base de datos: {db_actual}")
            print(f"Usuario: {usuario_actual}")

            #CLIENTES

            print("\n" + "=" * 60)
            print("TABLA CLIENTES")
            print("=" * 60)

            df_clientes = pd.read_sql_query(
                text("SELECT * FROM clientes"),
                connection
            )

            print(df_clientes)

            #ENVIOS

            print("\n" + "=" * 60)
            print("TABLA ENVIOS")
            print("=" * 60)

            df_envios = pd.read_sql_query(
                text("SELECT * FROM envios"),
                connection
            )

            print(df_envios)

            #RUTAS

            print("\n" + "=" * 60)
            print("TABLA RUTAS")
            print("=" * 60)

            df_rutas = pd.read_sql_query(
                text("SELECT * FROM rutas"),
                connection
            )

            print(df_rutas)

            #SATISFACCIÓN

            print("\n" + "=" * 60)
            print("TABLA SATISFACCIÓN")
            print("=" * 60)

            df_satisfaccion = pd.read_sql_query(
                text("SELECT * FROM satisfacción"),
                connection
            )

            print(df_satisfaccion)

            #VEHICULOS

            print("\n" + "=" * 60)
            print("TABLA VEHICULOS")
            print("=" * 60)

            df_vehiculos = pd.read_sql_query(
                text("SELECT * FROM vehiculos"),
                connection
            )

            print(df_vehiculos)

            #INFORMACIÓN DE ENVIOS

            print("\n" + "=" * 60)
            print("INFORMACIÓN DE ENVIOS")
            print("=" * 60)

            df_envios.info()

            #COLUMNAS

            print("\n" + "=" * 60)
            print("COLUMNAS DE ENVIOS")
            print("=" * 60)

            print(df_envios.columns.tolist())

            #PRIMERAS 5 FILAS

            print("\n" + "=" * 60)
            print("PRIMERAS 5 FILAS")
            print("=" * 60)

            print(df_envios.head())

            #ESTADÍSTICAS

            print("\n" + "=" * 60)
            print("RESUMEN ESTADÍSTICO")
            print("=" * 60)

            print(df_envios.describe())

            #TAMAÑO DEL DATAFRAME

            print("\n" + "=" * 60)
            print("TAMAÑO DEL DATAFRAME")
            print("=" * 60)

            print(f"Filas: {df_envios.shape[0]}")
            print(f"Columnas: {df_envios.shape[1]}")

            #ENVIOS POR ESTADO

            print("\n" + "=" * 60)
            print("ENVIOS POR ESTADO")
            print("=" * 60)

            print(df_envios["estado"].value_counts())

            #PRECIO PROMEDIO

            print("\n" + "=" * 60)
            print("PRECIO PROMEDIO DE ENVIOS")
            print("=" * 60)

            precio_promedio = df_envios["precio_envío"].mean()

            print(f"${precio_promedio:,.0f}")

            #PRECIO MÁXIMO

            precio_maximo = df_envios["precio_envío"].max()

            print(f"Precio máximo: ${precio_maximo:,.0f}")

            #PRECIO MÍNIMO

            precio_minimo = df_envios["precio_envío"].min()

            print(f"Precio mínimo: ${precio_minimo:,.0f}")


            #PROMEDIO DE SATISFACCIÓN

            print("\n" + "=" * 60)
            print("PROMEDIO DE SATISFACCIÓN")
            print("=" * 60)

            promedio_satisfaccion = df_satisfaccion[
                "calificacion"
            ].mean()

            print(f"Calificación promedio: {promedio_satisfaccion:.2f}")

            #RESUMEN DE TABLAS

            print("\n" + "=" * 60)
            print("RESUMEN DE LAS TABLAS")
            print("=" * 60)

            print(f"Clientes: {len(df_clientes)}")
            print(f"Envíos: {len(df_envios)}")
            print(f"Rutas: {len(df_rutas)}")
            print(f"Satisfacción: {len(df_satisfaccion)}")
            print(f"Vehículos: {len(df_vehiculos)}")

            print("\n" + "=" * 60)
            print("PROCESO FINALIZADO CORRECTAMENTE")
            print("=" * 60)

        return engine

    except Exception as e:

        print("\n" + "=" * 60)
        print("ERROR DE CONEXIÓN")
        print("=" * 60)

        print(e)

        return None


#EJECUTAR PROGRAMA

if __name__ == "__main__":

    print("\n")
    print("SISTEMA TRANSLOGISTICA")
    print("Python + Pandas + SQLAlchemy")
    print("MySQL/MariaDB - XAMPP")
    print("\n")

    conexion_sqlalchemy()