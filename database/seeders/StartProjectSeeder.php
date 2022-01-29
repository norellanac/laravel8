<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StartProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //
        $if_existCountry = Country::first();
        if (!$if_existTypeIdentify) {
            $record = new Country();
            $record->name = 'Guatemala';
            $record->code_phone = '502';
            $record->url_image = 'https://flagcdn.com/224x168/gt.png';
            $record->save();

            $record = new Country();
            $record->name = 'Argentina';
            $record->code_phone = '54';
            $record->url_image = 'https://flagcdn.com/224x168/ar.png';
            $record->save();

            $record = new Country();
            $record->name = 'España';
            $record->code_phone = '34';
            $record->url_image = 'https://flagcdn.com/224x168/es.png';
            $record->save();

            $record = new Country();
            $record->name = 'Honduras';
            $record->code_phone = '504';
            $record->url_image = 'https://flagcdn.com/224x168/hn.png';
            $record->save();

            $record = new Country();
            $record->name = 'Perú';
            $record->code_phone = '51';
            $record->url_image = 'https://flagcdn.com/224x168/pe.png';
            $record->save();

            $record = new Country();
            $record->name = 'Bolivia';
            $record->code_phone = '591';
            $record->url_image = 'https://flagcdn.com/224x168/bo.png';
            $record->save();

            $record = new Country();
            $record->name = 'Chile';
            $record->code_phone = '56';
            $record->url_image = 'https://flagcdn.com/224x168/cl.png';
            $record->save();

            $record = new Country();
            $record->name = 'Costa Rica';
            $record->code_phone = '506';
            $record->url_image = 'https://flagcdn.com/224x168/cr.png';
            $record->save();

            $record = new Country();
            $record->name = 'Ecuador';
            $record->code_phone = '593';
            $record->url_image = 'https://flagcdn.com/224x168/ec.png';
            $record->save();

            $record = new Country();
            $record->name = 'Nicaragua';
            $record->code_phone = '505';
            $record->url_image = 'https://flagcdn.com/224x168/ni.png';
            $record->save();

            $record = new Country();
            $record->name = 'Uruguay';
            $record->code_phone = '598';
            $record->url_image = 'https://flagcdn.com/224x168/uy.png';
            $record->save();

            $record = new Country();
            $record->name = 'Paraguay';
            $record->code_phone = '595';
            $record->url_image = 'https://flagcdn.com/224x168/py.png';
            $record->save();

            $record = new Country();
            $record->name = 'Venezuela';
            $record->code_phone = '58';
            $record->url_image = 'https://flagcdn.com/224x168/ve.png';
            $record->save();

            $record = new Country();
            $record->name = 'Brasil';
            $record->code_phone = '55';
            $record->url_image = 'https://flagcdn.com/224x168/br.png';
            $record->save();

            $record = new Country();
            $record->name = 'Colombia';
            $record->code_phone = '57';
            $record->url_image = 'https://flagcdn.com/224x168/co.png';
            $record->save();

            $record = new Country();
            $record->name = 'El Salvador';
            $record->code_phone = '503';
            $record->url_image = 'https://flagcdn.com/224x168/sv.png';
            $record->save();

            $record = new Country();
            $record->name = 'México';
            $record->code_phone = '52';
            $record->url_image = 'https://flagcdn.com/224x168/mx.png';
            $record->save();

            $record = new Country();
            $record->name = 'Panamá';
            $record->code_phone = '507';
            $record->url_image = 'https://flagcdn.com/224x168/pa.png';
            $record->save();

            $record = new Country();
            $record->name = 'Portugal';
            $record->code_phone = '351';
            $record->url_image = 'https://flagcdn.com/224x168/pt.png';
            $record->save();

            $record = new Country();
            $record->name = 'Puerto Rico';
            $record->code_phone = '001';
            $record->url_image = 'https://flagcdn.com/224x168/pr.png';
            $record->save();

            $record = new Country();
            $record->name = 'República Dominicana';
            $record->code_phone = '1';
            $record->url_image = 'https://flagcdn.com/224x168/do.png';
            $record->save();
        }

        $if_existState = State::first();
        if (!$if_existState) {
            $record = new State();
            $record->name = 'GUATEMALA';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'EL PROGRESO';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'SACATEPEQUEZ';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'CHIMALTENANGO';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'ESCUINTLA';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'SANTA ROSA';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'SOLOLA';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'TOTONICAPAN';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'QUETZALTENANGO';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'SUCHITEPEQUEZ';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'RETALHULEU';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'SAN MARCOS';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'HUEHUETENANGO';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'QUICHE';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'BAJA VERAPAZ';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'ALTA VERAPAZ ';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'PETEN';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'IZABAL';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'ZACAPA';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'CHIQUIMULA';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'JALAPA';
            $record->country_id = '1';
            $record->save();

            $record = new State();
            $record->name = 'JUTIAPA';
            $record->country_id = '1';
            $record->save();
        }

        $if_existCity = City::first();
        if (!$if_existCity) {
            $record = new City();
            $record->name = 'Guatemala';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'Santa Catarina Pínula';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'San José Pínula';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'San José del Golfo';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'Palencia';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'Chinautla';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'San Pedro Ayampuc';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'Mixco';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'San Pedro Sacatepéquez';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'San Juan Sacatepéquez ';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'San Raymundo';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'Chuarrancho';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'Fraijanes';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'Amatitlán';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'Villa Nueva';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'Villa Canales';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'Petapa';
            $record->states_id = '1';
            $record->save();

            $record = new City();
            $record->name = 'Guastatoya';
            $record->states_id = '2';
            $record->save();

            $record = new City();
            $record->name = 'Morazán';
            $record->states_id = '2';
            $record->save();

            $record = new City();
            $record->name = 'San Agustín Acasaguastlán ';
            $record->states_id = '2';
            $record->save();

            $record = new City();
            $record->name = 'San Cristóbal Acasaguastlán';
            $record->states_id = '2';
            $record->save();

            $record = new City();
            $record->name = 'El Jícaro';
            $record->states_id = '2';
            $record->save();

            $record = new City();
            $record->name = 'Sansare';
            $record->states_id = '2';
            $record->save();

            $record = new City();
            $record->name = 'Sanarate';
            $record->states_id = '2';
            $record->save();

            $record = new City();
            $record->name = 'San Antonio La Paz';
            $record->states_id = '2';
            $record->save();

            $record = new City();
            $record->name = 'Antigua Guatemala';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'Jocotenango';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'Pastores';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'Sumpango';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'Santo Domingo Xenacoj';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'Santiago Sacatepéquez';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'San Bartolomé Milpas Altas';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'San Lucas Sacatepéquez';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'Santa Lucía Milpas Altas';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'Magdalena Milpas Altas';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'Santa María de Jesús';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'Ciudad Vieja';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'San Miguel Dueñas';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'Alotenango';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'San Antonio Aguas Calientes';
            $record->states_id = '3';
            $record->save();

            $record = new City();
            $record->name = 'Santa Catarina Barahona';
            $record->states_id = '3';
            $record->save();


            $record = new City();
            $record->name = 'Chimaltenango';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'San José Poaquil';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'San Martín Jilotepeque';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'Copmalapa';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'Santa Apolonia';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'Tecpán Guatemala';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'Patzún';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'Pochuta';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'Patzicía';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'Santa Cruz Balanyá';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'Acatenango';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'Yepocapa';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'San Andrés Itzapa';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'Parramos';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'Zaragoza';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'El Tejar';
            $record->states_id = '4';
            $record->save();

            $record = new City();
            $record->name = 'Mixco';
            $record->states_id = '5';
            $record->save();

            $record = new City();
            $record->name = 'Escuintla';
            $record->states_id = '5';
            $record->save();

            $record = new City();
            $record->name = 'Santa Lucía Cotzumalguapa';
            $record->states_id = '5';
            $record->save();

            $record = new City();
            $record->name = 'La Democracia';
            $record->states_id = '5';
            $record->save();

            $record = new City();
            $record->name = 'Siquinalá';
            $record->states_id = '5';
            $record->save();

            $record = new City();
            $record->name = 'Masagua';
            $record->states_id = '5';
            $record->save();

            $record = new City();
            $record->name = 'Tiquisate';
            $record->states_id = '5';
            $record->save();

            $record = new City();
            $record->name = 'La Gomera';
            $record->states_id = '5';
            $record->save();

            $record = new City();
            $record->name = 'Guanagazapa';
            $record->states_id = '5';
            $record->save();

            $record = new City();
            $record->name = 'San José';
            $record->states_id = '5';
            $record->save();

            $record = new City();
            $record->name = 'Iztapa';
            $record->states_id = '5';
            $record->save();

            $record = new City();
            $record->name = 'Palín';
            $record->states_id = '5';
            $record->save();

            $record = new City();
            $record->name = 'San Vicente Pacaya';
            $record->states_id = '5';
            $record->save();

            $record = new City();
            $record->name = 'Nueva Concepción';
            $record->states_id = '5';
            $record->save();

            $record = new City();
            $record->name = 'Cuilapa';
            $record->states_id = '6';
            $record->save();

            $record = new City();
            $record->name = 'Barberena';
            $record->states_id = '6';
            $record->save();

            $record = new City();
            $record->name = 'Santa Rosa de Lima';
            $record->states_id = '6';
            $record->save();

            $record = new City();
            $record->name = 'Casillas';
            $record->states_id = '6';
            $record->save();

            $record = new City();
            $record->name = 'San Rafael Las Flores';
            $record->states_id = '6';
            $record->save();

            $record = new City();
            $record->name = 'Oratorio';
            $record->states_id = '6';
            $record->save();

            $record = new City();
            $record->name = 'San Juan Tecuaco';
            $record->states_id = '6';
            $record->save();

            $record = new City();
            $record->name = 'Chiquimulilla';
            $record->states_id = '6';
            $record->save();

            $record = new City();
            $record->name = 'Taxisco';
            $record->states_id = '6';
            $record->save();

            $record = new City();
            $record->name = 'Sana María Ixhuatán';
            $record->states_id = '6';
            $record->save();

            $record = new City();
            $record->name = 'Guazacapán';
            $record->states_id = '6';
            $record->save();

            $record = new City();
            $record->name = 'Santa Cruz Naranjo';
            $record->states_id = '6';
            $record->save();

            $record = new City();
            $record->name = 'Pueblo Nuevo Viñas';
            $record->states_id = '6';
            $record->save();

            $record = new City();
            $record->name = 'Nueva Santa Rosa';
            $record->states_id = '6';
            $record->save();

            $record = new City();
            $record->name = 'Sololá';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'San José Chacayá';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'Santa María Visitación';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'Santa Lucía Utatlán';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'Nahualá';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'Santa Catarina Ixtahuacán';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'Santa Clara La Laguna';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'Concepción';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'San Andrés Semetabaj';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'Panajachel';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'Santa Catarina Palopó ';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'San Antonio Palopó ';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'San Lucas Tolimán';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'Santa Cruz La Laguna';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'San Pablo La Laguna';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'San Marcos La Laguna';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'San Juan La Laguna';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'San Pedro La Laguna';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'Santiago Atitlán';
            $record->states_id = '7';
            $record->save();

            $record = new City();
            $record->name = 'Totonicapán';
            $record->states_id = '8';
            $record->save();

            $record = new City();
            $record->name = 'San Cristóbal Totonicapán';
            $record->states_id = '8';
            $record->save();

            $record = new City();
            $record->name = 'San francisco el alto';
            $record->states_id = '8';
            $record->save();

            $record = new City();
            $record->name = 'San Andrés xecul ';
            $record->states_id = '8';
            $record->save();

            $record = new City();
            $record->name = 'momostenango';
            $record->states_id = '8';
            $record->save();

            $record = new City();
            $record->name = 'Santa maría Chiquimula';
            $record->states_id = '8';
            $record->save();

            $record = new City();
            $record->name = 'Santa lucia la reforma';
            $record->states_id = '8';
            $record->save();

            $record = new City();
            $record->name = 'San Bartolo';
            $record->states_id = '8';
            $record->save();

            $record = new City();
            $record->name = 'Quetzaltenango';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Salcaja';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Olintepeque';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'San Carlos Sija';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Sibilia';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Cabricán';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Cajola';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'San Miguel Siguilá';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Ostucalco';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'San Mateo';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Concepcion Chiquirichapa';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'San Martin Sacatepéquez';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Almolonga';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Cantel';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Huitan';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Zunil';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Colomba';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'San francisco la Union';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'El palmar';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Coatepeque';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Génova';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Flores costa cuca';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'La Esperanza';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Palestina de los Altos';
            $record->states_id = '9';
            $record->save();

            $record = new City();
            $record->name = 'Mazatenango';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'Cuyotenango';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'San francisco zapotitlan';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'San Bernardino';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'San jose el ídolo';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'Santo Domingo Suchitepequez';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'San Lorenzo';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'Samayac';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'San pablo jocopilas';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'San Antonio suchitepequez';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'San migel panán';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'San Gabriel';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'Chicacao';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'Patulul';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'Santa Barbara';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'San juan bautista';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'Sanato tomas la Union';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'Zunilito';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'Pueblo Nuevo';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'Rio bravo';
            $record->states_id = '10';
            $record->save();

            $record = new City();
            $record->name = 'Retalhuleu';
            $record->states_id = '11';
            $record->save();

            $record = new City();
            $record->name = 'San Sebastián';
            $record->states_id = '11';
            $record->save();

            $record = new City();
            $record->name = 'Santa cruz muluá';
            $record->states_id = '11';
            $record->save();

            $record = new City();
            $record->name = 'San martin zapotitlan';
            $record->states_id = '11';
            $record->save();

            $record = new City();
            $record->name = 'San Felipe';
            $record->states_id = '11';
            $record->save();

            $record = new City();
            $record->name = 'San andres villa seca';
            $record->states_id = '11';
            $record->save();

            $record = new City();
            $record->name = 'Champerico';
            $record->states_id = '11';
            $record->save();

            $record = new City();
            $record->name = 'Nuevo san carlos';
            $record->states_id = '11';
            $record->save();

            $record = new City();
            $record->name = 'El asintal';
            $record->states_id = '11';
            $record->save();

            $record = new City();
            $record->name = 'San Marcos';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'San pedro sacatepequez';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'San Antonio sacatepequez';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Comitancillo';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'San miguel ixtahuacan';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Concepcion tutuapa';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Tacapa';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Sibilia';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Tajumulco';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Tejutla';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'San Rafael pie de la cuesta';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Nuevo progreso';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'El tumbador';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'El rodeo';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Malacatan';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Catarina';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Ayutla';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Ocos';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'SanPablo';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'El quetzal';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'La reforma';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Pajapita';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Ixchiguan';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'San jose ojetenam';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'San cristobal cucho';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Sipacapa';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Esquipulas palo gorgo';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Rio blanco';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'San Lorenzo';
            $record->states_id = '12';
            $record->save();

            $record = new City();
            $record->name = 'Huehuetenango';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Chiantla';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Malacatancito';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Cuilco';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Nentón';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'San Pedro Necta';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Jacaltenango';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Soloma';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Ixtahuacán';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Santa Bárbara';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'La Libertad';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'La Democracia';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'San Miguel Acatán';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'San Rafael La Independencia';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Todos Santos Cuchumatán';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'San Juan Atitán';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Santa Eulalia';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'San Mateo Ixtatán';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Colotenango';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'San Sebastián Huehuetenango';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Tectitán';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Concepción';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'San Juan Ixcoy';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'San Antonio Huista';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'San Sebastián Coatán';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Barillas';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Aguacatán';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'San Rafael Petzal';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'San Gaspar Ixchil';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Santiago Chimaltenango';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Santa Ana Huista';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Unión Cantinil';
            $record->states_id = '13';
            $record->save();

            $record = new City();
            $record->name = 'Santa Cruz del Quiché';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Chiché';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Chinique';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Zacualpa';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Chajul';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Chichicastenango';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Patzité';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'San Antonio Ilotenango';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'San Pedro jocopilas';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Cunén';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'San Juan Cotzal';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Joyabaj';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Nebaj';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'San Andrés Sajcabajá';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Uspantán';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Sacapulas';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'San Bartolomé Jocotenango';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Canillá';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Chicamán';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Ixcán';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Pachalum';
            $record->states_id = '14';
            $record->save();

            $record = new City();
            $record->name = 'Salamá';
            $record->states_id = '15';
            $record->save();

            $record = new City();
            $record->name = 'San Miguel Chicaj';
            $record->states_id = '15';
            $record->save();

            $record = new City();
            $record->name = 'Rabinal';
            $record->states_id = '15';
            $record->save();

            $record = new City();
            $record->name = 'Cubulco';
            $record->states_id = '15';
            $record->save();

            $record = new City();
            $record->name = 'Granados';
            $record->states_id = '15';
            $record->save();

            $record = new City();
            $record->name = 'El Chol';
            $record->states_id = '15';
            $record->save();

            $record = new City();
            $record->name = 'San Jorónimo';
            $record->states_id = '15';
            $record->save();

            $record = new City();
            $record->name = 'Purulhá';
            $record->states_id = '15';
            $record->save();

            $record = new City();
            $record->name = 'Cobán';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'Santa Cruz Verapáz';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'San Cristóbal Verapáz';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'Tactic';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'Tamahú';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'Tucurú';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'Panzós';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'Senahú';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'San Pedro Carchá';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'San Juan Chamelco';
            $record->states_id = '16';
            $record->save();
            $record = new City();
            $record->name = 'Lanquín';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'Cahabón';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'Chisec';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'Chahal';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'Fray Bartolomé de las Casas';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'Santa Catalina La Tinta';
            $record->states_id = '16';
            $record->save();

            $record = new City();
            $record->name = 'Flores';
            $record->states_id = '17';
            $record->save();

            $record = new City();
            $record->name = 'San José';
            $record->states_id = '17';
            $record->save();

            $record = new City();
            $record->name = 'San Benito';
            $record->states_id = '17';
            $record->save();

            $record = new City();
            $record->name = 'San Andrés';
            $record->states_id = '17';
            $record->save();

            $record = new City();
            $record->name = 'La Libertad';
            $record->states_id = '17';
            $record->save();

            $record = new City();
            $record->name = 'San Francisco';
            $record->states_id = '17';
            $record->save();

            $record = new City();
            $record->name = 'Santa Ana';
            $record->states_id = '17';
            $record->save();

            $record = new City();
            $record->name = 'Dolores';
            $record->states_id = '17';
            $record->save();

            $record = new City();
            $record->name = 'San Luis';
            $record->states_id = '17';
            $record->save();

            $record = new City();
            $record->name = 'Sayaxché';
            $record->states_id = '17';
            $record->save();

            $record = new City();
            $record->name = 'Melchor de Mencos';
            $record->states_id = '17';
            $record->save();

            $record = new City();
            $record->name = 'Poptún';
            $record->states_id = '17';
            $record->save();

            $record = new City();
            $record->name = 'Puerto Barrios';
            $record->states_id = '18';
            $record->save();

            $record = new City();
            $record->name = 'Livingston';
            $record->states_id = '18';
            $record->save();

            $record = new City();
            $record->name = 'El Estor';
            $record->states_id = '18';
            $record->save();

            $record = new City();
            $record->name = 'Morales';
            $record->states_id = '18';
            $record->save();

            $record = new City();
            $record->name = 'Los Amates';
            $record->states_id = '18';
            $record->save();

            $record = new City();
            $record->name = 'Zacapa';
            $record->states_id = '19';
            $record->save();

            $record = new City();
            $record->name = 'Estanzuela';
            $record->states_id = '19';
            $record->save();

            $record = new City();
            $record->name = 'Río Hondo';
            $record->states_id = '19';
            $record->save();

            $record = new City();
            $record->name = 'Gualán';
            $record->states_id = '19';
            $record->save();

            $record = new City();
            $record->name = 'Teculután';
            $record->states_id = '19';
            $record->save();

            $record = new City();
            $record->name = 'Usumatlán';
            $record->states_id = '19';
            $record->save();

            $record = new City();
            $record->name = 'Cabañas';
            $record->states_id = '19';
            $record->save();

            $record = new City();
            $record->name = 'San Diego';
            $record->states_id = '19';
            $record->save();

            $record = new City();
            $record->name = 'La Unión';
            $record->states_id = '19';
            $record->save();

            $record = new City();
            $record->name = 'Huité';
            $record->states_id = '19';
            $record->save();

            $record = new City();
            $record->name = 'Chiquimula';
            $record->states_id = '20';
            $record->save();

            $record = new City();
            $record->name = 'San José La arada';
            $record->states_id = '20';
            $record->save();

            $record = new City();
            $record->name = 'San Juan Ermita';
            $record->states_id = '20';
            $record->save();

            $record = new City();
            $record->name = 'Jocotán';
            $record->states_id = '20';
            $record->save();

            $record = new City();
            $record->name = 'Camotán';
            $record->states_id = '20';
            $record->save();

            $record = new City();
            $record->name = 'Olopa';
            $record->states_id = '20';
            $record->save();

            $record = new City();
            $record->name = 'Esquipulas';
            $record->states_id = '20';
            $record->save();

            $record = new City();
            $record->name = 'Concepción Las Minas';
            $record->states_id = '20';
            $record->save();

            $record = new City();
            $record->name = 'Quetzaltepeque';
            $record->states_id = '20';
            $record->save();

            $record = new City();
            $record->name = 'San Jacinto';
            $record->states_id = '20';
            $record->save();

            $record = new City();
            $record->name = 'Ipala';
            $record->states_id = '20';
            $record->save();

            $record = new City();
            $record->name = 'Jalapa';
            $record->states_id = '21';
            $record->save();

            $record = new City();
            $record->name = 'San Pedro Pínula';
            $record->states_id = '21';
            $record->save();

            $record = new City();
            $record->name = 'San Luis Jilotepeque';
            $record->states_id = '21';
            $record->save();

            $record = new City();
            $record->name = 'San Manuel Chaparrón';
            $record->states_id = '21';
            $record->save();

            $record = new City();
            $record->name = 'San Carlos Alzatate';
            $record->states_id = '21';
            $record->save();

            $record = new City();
            $record->name = 'Monjas';
            $record->states_id = '21';
            $record->save();

            $record = new City();
            $record->name = 'Mataquescuintla';
            $record->states_id = '21';
            $record->save();

            $record = new City();
            $record->name = 'Jutiapa';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'El Progreso';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'Santa Catarina Mita';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'Agua Blanca';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'Asunción Mita';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'Yupiltepeque';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'Atescatempa';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'Jeréz';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'El Adelanto';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'Zapotitlán';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'Comapa';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'Jalpatagua';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'Conguaco';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'Moyuta';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'Pasaco';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'San José Acatempa';
            $record->states_id = '22';
            $record->save();

            $record = new City();
            $record->name = 'Quezada';
            $record->states_id = '22';
            $record->save();
        }

       

        $if_existRole = Role::first();
        if (!$if_existRole) {
            $record = new Role();
            $record->name = 'SuperAdministrador';
            $record->save();

            $record = new Role();
            $record->name = 'Administrador';
            $record->save();

            $record = new Role();
            $record->name = 'Operador';
            $record->save();
            

            $record = new Role();
            $record->name = 'Usuario';
            $record->save();
        }
        $ifexistUser = User::first();
        if (!$ifexistUser) {

            $record = new User;
            $record->name = 'norellanac';
            $record->password = Hash::make('12341234');
            $record->country_id = 1;
            $record->email="norellana@homeland.com.gt";
            $record->save();
            $record->syncRoles('SuperAdministrador');
        }
        $ifexistCoin = Coin::first();
        if (!$ifexistCoin) {
            $record = new Coin;
            $record->short_name = 'QTZ Q';
            $record->name = 'Quetzal';
            $record->save();

            $record = new Coin;
            $record->short_name = 'USD $';
            $record->name = 'Dolar';
            $record->save();
        }

        $ifexistLanguage = Language::first();
        if (!$ifexistLanguage) {

            $record = new Language;
            $record->name = 'Español';
            $record->short_name = 'es';
            $record->save();

            $record = new Language;
            $record->name = 'English';
            $record->short_name = 'en';
            $record->save();

            $record = new Language;
            $record->name = 'Quiché';
            $record->short_name = 'Quiché';
            $record->save();

            $record = new Language;
            $record->name = 'Mam';
            $record->short_name = 'Mam';
            $record->save();

            $record = new Language;
            $record->name = 'kaqchikel';
            $record->short_name = 'kaqchikel';
            $record->save();

            $record = new Language;
            $record->name = 'Poqomam';
            $record->short_name = 'Poqomam';
            $record->save();
        }
    }
}
