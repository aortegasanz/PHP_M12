# Tasca M12
- Descripció
    En aquesta pràctica aprendras a aplicar mecanismes bàsics d’autenticació d’usuaris en Laravel. Hauras de crear una aplicació, per la gestió dels partits de una Lliga de Futbol, aplicant el patró de disseny de software MVC(Model-Vista-Controlador). 

    * Nivell 1
        - Exercici 1
            Crear una aplicació, per la gestió dels partits de una Lliga de Futbol, aplicant el patró de disseny de software MVC(Model-Vista-Controlador). 
            Afegeix el sistema de control d’accés de Laravel Breeze, defineix la vista de login, registre i recuperació de contrasenya que l'usuari necessita per accedir a l'aplicació. Fes ús de la configuració per defecte.

        - Exercici 2
            Definir les rutes principals que tindrà el nostre lloc web. El domini ha de tindre el CRUD al complet (Create, Read, Update, Delete) d'equips i partits utilitzant els mètodes HTTP corresponents.
            Crea les vistes php y associa-la a cadascuna de les rutes .
            Defineix els Models de dades, middleware i controllers que consideres necessaris. Recorda que al menys tindràs dues taules en base de dades; equips i partits. 
            La interacció amb la base de dades es realitzarà per mitjà del ORM Eloquent i per tant els objectes seran persistits únicament en memòria.

        - Exercici 3    
            Crear els formularis necessaris per poder realitzar el CRUD sobre el sistema de gestió d'equips i partits. Heu de validar que la informació introduïda a l'usuari sigui correcta.

    * Nivell 2
        - Exercici 4
            Customitza la vista de login, registre i recuperació de contrasenya que l'usuari necessita per accedir a l'aplicació. Defineix sistema de rols i bloqueja el accés a les diferents vistes segons el seu nivell de privilegis.
        - Exercici 5
            Defineix la vista home de benvinguda a l’aplicació i introdueix una navbar.
            Crea un sistema que gestiona l'error 404 a nivell de projecte. Podeu utilitzar la funció Resposta i la redirecció de Laravel.
    
    * Nivell 3
        - Exercici 6
            Agafeu les dades d'inici de sessió al sistema de galetes de Laravel. En cadascuna de les vistes has d'incrustar al navbar el nom d'usuari registrat i el rol d’aquest.

# Recursos

    - Rols i permisos  (Nota: Tingues en compte que en recurs; per a exemplificar amb el paquet de rols i permisos, els comandos per a autenticació d'usuaris canvien depenent de la versió de Laravel).
    
    https://styde.net/roles-y-permisos-con-spatie-laravel-permission/

    - Relationships: Eloquent
    https://laravel.com/docs/8.x/eloquent-relationships

    - Manejo de errores
    https://laravel.com/docs/8.x/errors#rendering-exceptions