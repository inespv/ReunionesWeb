class Usuario
{
    Usuario (nombre, edad, email, password) {
        this.nombre = nombre;
        this.edad = edad;
        this.email = email;
        this.password = password;
    }

    getNombre() {
        return this.nombre;
    }

    getEdad() {
        return this.edad;
    }

    getEmail() {
        return this.email;
    }

    getPassword() {
        return this.password;
    }

    setNombre(nombre){
        this.nombre = nombre;
    }

    setEdad(edad) {
        this.edad = edad;
    }

    setEmail(email) {
        this.email = email;
    }

    setPassword(password) {
        this.password = password;
    }
    
    toString() {
        return `${this.nombre} - ${this.edad}-${this.email}-${this.password}`;
    }
}