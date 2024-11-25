from flask import Flask, request, jsonify
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time
from flask_cors import CORS

app = Flask(__name__)
CORS(app)

@app.route('/consulta_cedula', methods=['POST'])
def consulta_cedula():
    data = request.json
    nombre = data.get("nombre")
    paterno = data.get("paterno")
    materno = data.get("materno")

    if not nombre or not paterno or not materno:
        return jsonify({"error": "Faltan datos en la solicitud"}), 400

    driver = webdriver.Chrome()

    try:
        driver.get("https://www.cedulaprofesional.sep.gob.mx/cedula/presidencia/indexAvanzada.action")
        time.sleep(5)
        
        driver.find_element(By.ID, 'nombre').send_keys(nombre)
        driver.find_element(By.ID, 'paterno').send_keys(paterno)
        driver.find_element(By.ID, 'materno').send_keys(materno)
        driver.find_element(By.ID, 'materno').send_keys(Keys.RETURN)

        WebDriverWait(driver, 60).until(
            EC.visibility_of_element_located((By.ID, 'cedulasGrid'))
        )

        profession_element = WebDriverWait(driver, 60).until(
            EC.visibility_of_element_located((By.ID, 'detalleProfesion'))
        )
        results2 = profession_element.text
        
        if any(term in results2 for term in ["PSICOLOGÍA", "PSICÓLOGO", "PSICOPEDAGOGÍA"]):
            return jsonify({"status": "success", "message": "Cédula válida y en el área de psicología"}), 200
        else:
            return jsonify({"status": "error", "message": "Lo sentimos, pero la profesión indicada no corresponde al área de psicología. Por favor verifica los datos."}), 400




    except Exception as e:
        return jsonify({"error": str(e)}), 500
    finally:
        driver.quit()

if __name__ == '__main__':
    app.run(debug=True)



