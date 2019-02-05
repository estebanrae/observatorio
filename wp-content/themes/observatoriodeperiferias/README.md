Agregar nueva lista de reproducción de YouTube

Las listas de reproducción son el método de categorizar los videos.
Para que un video pueda ser visto en la sección de "Producciones", este deberá existir en la lista de reproducción de YouTube correspondiente. 
El ID de la lista de reproducción, encontrado en la URL de youtube.com al seleccionar una lista de reproducción en la biblioteca, deberá coincidir con la entrada de WordPress que corresponda a esa lista de reproducción.
Por ejemplo, en la siguiente URL:
https://www.youtube.com/playlist?list=PLcpZn-jcTumGKlIO-Hjx5ddY7kohdXdSf
el parametro "PLcpZn-jcTumGKlIO-Hjx5ddY7kohdXdSf" que corresponde al ID de la playlist, deberá coincidir con la entrada de WorPress que corresponda a esa lista de reproducción.

En un principio, se definieron dos categorías generales para los videos: Producciones y Sesiones. Estas categorías contienen subcategorías que funcionan como filtros:
Producciones
	subcatA
	subcatB
	subcatC
Sesiones
	subcatA
	subcatB

Para agregar una subcategoría, se deberá agregar una lista de reproducción nueva, con los videos deseados de esa subcategoría, se deberá copiar el ID como se definió anteriormente, y se generará una nueva entrada de WordPress. Para generar una nueva entrada, dentro del panel de administrador de WordPress, se dará click en la sección Entradas, posteriormente en Añadir Nueva, se le dará el título que deberá tener la subcategoría, en el contenido se agregará el ID de la playlist, y en la sección de la derecha se seleccionará su categoría superior, si pertenece a producciones o a sesiones. De no realizarse todos estos pasos, el cambio no se verá reflejado. 

Para editar la sección de Información, se accederá a la sección de Entradas, en la entrada titulada Información, se deberá editar el contenido y al finalizar, dar click en el panel de la derecha en el botón de Actualizar.

El menú es dependiente de las páginas, por lo que si se desea alterar algún título, se deberá acceder a la sección de Páginas en el administrador, y dar click en Editar en la entrada que se desee editar.

El orden del menú se puede editar en la sección de Apariencia->Menús, colocando con el mouse los elementos en el orden que se requiere que aparezcan. Al haber finalizado el cambio, se deberá hacer click en el botón de Guardar Menú.
