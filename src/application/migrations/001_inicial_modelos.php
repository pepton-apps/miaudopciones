<?php

class Migration_inicial_modelos extends CI_Migration {

    public function up() {
        // Adopciones
        $this->dbforge->add_field('id');
        $fields = array(
            'fecha' => array(
                'type' => 'DATE',
                'null' => false,
            ),
            'gato' => array(
                'type' => 'INT',
                'constraint' => '50',
                'null' => false,
            ),
            'adoptante' => array(
                'type' => 'INT',
                'constraint' => '50',
                'null' => false,
            ),
            'formularioAdopcion' => array(
                'type' => 'INT',
                'constraint' => '50',
                'null' => false,
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('adopciones');

        // Adoptantes
        $this->dbforge->add_field('id');
        $fields = array(
            'nombres' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'apellidos' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'mail' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'fb' => array(
                'type' => 'BIGINT',
            ),
            'telCel' => array(
                'type' => 'INT',
                'constraint' => '10',
            ),
            'telFijo' => array(
                'type' => 'INT',
                'constraint' => '10',
            ),
            'urlFoto' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
            )
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('adoptantes');

        // Gatos
        $this->dbforge->add_field('id');
        $fields = array(
            'nombre' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'alias' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'edad' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'color' => array(
                'type' => 'VARCHAR',
                'constraint' => '10',
            ),
            'raza' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'descripcion' => array(
                'type' => 'TEXT',
            ),
            'sexo' => array(
                'type' => 'VARCHAR',
                'constraint' => '1',
            ),
            'historiaMedica' => array(
                'type' => 'TEXT',
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('gatos');

        // Info Nosotros
        $fields = array(
            'nombre' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'descripcion' => array(
                'type' => 'TEXT',
            ),
            'lat' => array(
                'type' => 'FLOAT',
            ),
            'lon' => array(
                'type' => 'FLOAT',
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('infoNosotros');

        // Fotos gatos
        $this->dbforge->add_field('id');
        $fields = array(
            'gato' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'descripcion' => array(
                'type' => 'TEXT',
            ),
            'url' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
            ),
            
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('fotosGatos');
        
        // Formularios adopcion
        
    }

    public function down() {
        $this->dbforge->drop_table('adopciones');
        $this->dbforge->drop_table('adoptantes');
        $this->dbforge->drop_table('gatos');
        $this->dbforge->drop_table('infoNosotros');
    }

}
