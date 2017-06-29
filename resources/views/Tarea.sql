
-Materia
	*id int (11) auto_increment PK
	*clave varchar(100)
	*nombre varchar(100)
	*creditos int (4)
	*horario 
	*created_at timestamp on update Current_timestamp on 
	*updated_at timestamp on update Current_timestamp on

-Maestro
	*id int (11) auto_increment PK
	*no_control int (11)
	*nombre varchar(100)
	*edad int(4)
	*sexo tinyint (11)   
	*created_at timestamp on update Current_timestamp on 
	*updated_at timestamp on update Current_timestamp on
-Grupo
	*id
	*salon
	*created_at timestamp on update Current_timestamp on 
	*updated_at timestamp on update Current_timestamp on



Materia ---> Grupos
        1.. *

Maestro ----> Grupos
        1 ..*

Carrera ----> alumnos
        1..*

Carrera --->Maestro


Alumnos ----> alumno-gpo
        1..*

Grupos -----> alumno-gpo
	    1..*


tabla Materia
tabla  Materia_Grupo
tabla Grupo
tabla Grupo_Maestro
tabla Maestro

gpo |aula| materia| clave de materia |

/* Pendientes control Escolar

*Carga de materias
*Lista de grupos
*Captura de calificaciones
*Impresion de kardex

*/