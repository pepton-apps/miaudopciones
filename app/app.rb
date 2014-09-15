# app.rb
require 'sinatra'

get '/' do
    'Hello, world!'
end

# login	
get '/login' do
	'Login'
end

# gatos	
get '/gatos' do
	'Gatos'
end

# gatos/agregar	
get '/gatos/agregar' do
	'Agregar gato'
end

# gatos/eliminar/{id}	
get '/gatos/eliminar/:id_gato' do
	"Eliminar gato #{params[:id_gato]}"
end

# gatos/editar/{id}	
get '/gatos/editar/:id_gato' do
	'Editar gato'
end

# adopciones/agregar	
get '/adopciones/agregar' do
	'Agregar adpocion'
end

# adopciones/eliminar/{id}	
get '/adopciones/eliminar/:id_gato' do
	"Eliminar adopcion #{params[:id_gato]}"
end

# formulario/editar	
get '/formulario/editar' do
	'Editar formulario'
end

# gatos/agregar-solicitud/{id}	
get '/gatos/agregar-solicitud/:id_gato' do
	"Agregar solicitud #{params[:id_gato]}"
end

# nosotros/editar	
get '/nosotros/editar' do
	'Editar info nosotros'
end

# nosotros	
get '/nosotros' do
	'Ver info nosotros'
end

# adopciones/
get '/adopciones' do
	'Ver lista de adoptantes'
end

# adopciones/
get '/adopciones/:id_adopcion' do
	"Ver adopcion #{params[:id_adopcion]}"
end
