<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entries')->insert([
            [
                'entry_id' => 1,
                'category_id' => 4,
                'title' => 'Cuál es el origen del origami',
                'text' => 'El origami consiste en crear diferentes formas utilizando la técnica del plegado de papel, define la Asociación Japonesa de Origami en su sitio web. Esta práctica es una de las artes típicas que se transmite desde la antigüedad en Japón.
                De acuerdo a la asociación de origami, el día mundial de esta técnica es el 11 de noviembre. La fecha elegida se debe a que el número 1 representa un lado de un cuadrado, por lo que esta fecha (día 11 del mes 11) simboliza los cuatro lados de un cuadrado de origami. 
                La jornada coincide con la Semana Internacional de la Ciencia y la Paz proclamada por la Organización de las Naciones Unidas (ONU) y con el aniversario de la firma del Armisticio del 11 de noviembre que dio fin a la Primera Guerra Mundial. 
                
                “Una de las razones para establecer este día es que tiene algo en común con el deseo de paz en el origami”, advierte la organización.
                
                Según la asociación japonesa, el método de fabricación de papel llegó a ese país a principios del siglo VII. Cuando eso sucedió, crearon un papel delgado pero resistente llamado “washi”. 
                
                Al principio, este material se utilizaba para la copia de sutras (textos del hinduismo y el budismo) y registros. Aunque luego comenzó a usarse para rituales y para envolver las ofrendas a los dioses. 
                
                Entre los siglos XIV y XV algunas familias establecieron reglas de etiqueta y, con ello, el doblado ceremonial del papel. Tiempo después, la producción de papel aumentó y el origami se volvió aún más popular. Fue entonces, en 1797, cuando se publicó “Hiden Sebazuru Orikata”, el libro de origami más antiguo del mundo,
                
                Con el pasar de los años esta técnica se introdujo en la educación infantil. Actualmente “la magnificencia del origami, que ha llegado al corazón de todos y cada uno de nosotros, trasciende las fronteras nacionales y regionales y se difunde por el mundo como el lenguaje universal origami".',
                'author' => 'Chelo',
                'created_at' => now(),
                'updated_at' => now(),
                'cover' => null,
                'cover_description' => null
            ],
            [
                'entry_id' => 2,
                'category_id' => 2,
                'title' => 'Didáctica y uso del origami como herramienta pedagógica',
                'text' => 'Vivimos en un mundo en constante cambio. Los avances en el campo de la tecnología han supuesto cambios en todos los ámbitos de la vida. En el mundo educativo, se imponen las nuevas tecnologías en los métodos de enseñanza. Sin embargo, el plegado de un simple papel puede ser tan eficiente como cualquier otro método. El aprendizaje experiencial con origami es una oportunidad de construir el aprendizaje significativo. El origami se usa actualmente en el desarrollo de una gran variedad de productos de la vida cotidiana, desde la bolsa de maíz pira para el microondas, al airbag que nos protege en caso de accidente (avances en ingeniería).

                Teniendo en cuente este panorama, como docente y considerando en hacer un aporte a la mejora de la calidad académica para la escuela donde laboro, presento una propuesta pedológica, metodológica, didáctica y lúdica a su vez, la cual consiste en el uso del origami o papiroflexia, que es la utilización del papel, para hacer dobleces que ayudan a creación de figuras distintas e ilimitadas.
                
                Es por tanto que, toda innovación del ser humano es para beneficio de él mismo, pese a que no se tenga en mente, para bien o para mal. El origami no es la excepción, puesto que, si se analiza desde una perspectiva más objetiva, se encuentra en los lugares menos pensados, como la pedagogía.
                
                El origami podría considerarse una asignatura más dentro de un pénsum académico, puesto que es una herramienta que sirve para todo tipo de contenidos, especialmente los más complejos de tratar con los estudiantes. Este permite crear situaciones inolvidables en las clases de ciencias naturales (ecosistemas, fauna y flora, entre otros temas), ciencias sociales (por ejemplo, usando un tanque de guerra en origami, para explicar la Primera y Segunda Guerra Mundial), la integración de la escuela a la comunidad y padres de familia en las escuelas “escuelas de padres” institucional en la comunidad con talleres abiertos, talleres de emprendimientos productivos y muchos más.
                
                La utilización de esta herramienta pedagógica se pondrá en práctica en los estudiantes y maestros, con el fin de fortalecer las competencias académicas para cada uno de ellos.
                
                El origami ayuda a reforzar algunas fortalezas, tales como: desarrollar la destreza, exactitud y precisión manual, requiriendo atención y concentración en la elaboración de figuras en papel que se necesite, crear espacios de motivación personal para desarrollar la creatividad y medir el grado de coordinación entre lo real y lo abstracto, incitar al estudiante a que sea capaz de crear sus propios modelos, brindar momentos de esparcimiento y distracción, fortalecimiento de la autoestima a través de la elaboración de sus propias creaciones, también promueve el trabajo en equipo, estimulando el valor de la solidaridad.
                
                Pero, ¿cómo usar el origami en el proceso de enseñanza en la escuela? Demostrando su uso y aplicación como una herramienta didáctica de esta técnica milenaria en todas las asignaturas del saber en la escuela, además de construir un documento o manual de trabajo didáctico para los docentes, el cual contenga contenidos académicos acompañado de cómo se realizan múltiples figuras con el papel, con el objetivo de capacitar al docente sobre cómo realizar este ejercicio artístico con sus estudiantes, ayudando a toda la comunidad escolar a mejorar su motricidad y fortalecer su parte emocional.',
                'author' => 'Juan Carlos Nietzsche',
                'created_at' => now(),
                'updated_at' => now(),
                'cover' => null,
                'cover_description' => null
            ],
            [
                'entry_id' => 3,
                'category_id' => 3,
                'title' => 'El origami: Fuenta de inspiración de la arquitectura',
                'text' => 'Como concepto revolucionario, hay pocos ejemplos de origami en la arquitectura mundial, pero los pocos que hay son sorprendentes. Veamos unos cuantos.

                Papel arrugado en un instituto
                
                Nos referimos a la fachada, por supuesto. En Austria se encuentra el crinkled wall (pared arrugada), un edificio que alberga el instituto de la localidad de Kufsteion (Austria). El proyecto data de 2013 y consiste en una estructura de cemento similar a un trozo de papel arrugado en un lado del edificio. Todo se debe a la necesidad de ampliar las instalaciones existentes, construidas en 1907 por el célebre arquitecto alemán Willy Graf.
                
                Casas plegadas
                
                La forma del papel plegado es sumamente fácil de aplicar a las fachadas de los edificios. Un ejemplo es una vivienda construida en Kuwait diseñada por Joaquín Pérez-Goicoechea y Nasser B. Abulhasan de AGi architects. A partir de una sencilla planta rectangular, los dos arquitectos han sabido plasmar la forma de un papel con sencillas dobleces. El edificio es una vivienda unifamiliar fabricada íntegramente de hormigón armado, que gira sobre sí misma creando un patio central. La ventaja: estos plisados crean juegos de luces y sombras tanto en el interior como el exterior de la casa, haciendo juegos de luces sorprendentes.
                
                ',
                'author' => 'Roberto Gomez Bolaños',
                'created_at' => now(),
                'updated_at' => now(),
                'cover' => null,
                'cover_description' => null
            ],
            [
                'entry_id' => 4,
                'category_id' => 1,
                'title' => 'Cómo hacer un barquito de origami',
                'text' => 'Este es un diseño clásico y simple que es perfecto para principiantes. Solo necesitas una hoja de papel cuadrada.

                Pasos:
                
                Comienza con una hoja de papel cuadrada. Si no tienes una hoja cuadrada, puedes doblar una hoja rectangular en forma de triángulo y cortar el exceso para hacerla cuadrada.
                
                Coloca el papel con el lado blanco hacia arriba. Luego, dóblalo por la mitad en sentido diagonal para formar un triángulo.
                
                Abre el papel y repite el paso anterior, doblando en la otra dirección para que tengas una cruz marcada en el papel.
                
                Gira el papel de modo que tengas un triángulo con la parte abierta hacia arriba.
                
                Dobla el papel por la mitad, alineando el borde inferior con el borde superior del triángulo. Deberías obtener un triángulo más pequeño.
                
                A continuación, desdobla la última doblez para volver al triángulo grande. Luego, dobla los dos lados del triángulo hacia el centro, de modo que se superpongan ligeramente en el medio.
                
                Voltea el papel y repite el paso anterior, doblando los dos lados hacia el centro.
                
                Ahora, dobla la parte inferior del triángulo hacia arriba para que el barco tome forma. Deja un pequeño espacio en la parte superior del triángulo para formar la vela.
                
                Dobla el triángulo superior hacia abajo sobre la parte inferior del barco para crear la vela del barco.
                
                Ajusta los pliegues según sea necesario para que el barquito quede bien formado.
                
                ',
                'author' => 'Dios',
                'created_at' => now(),
                'updated_at' => now(),
                'cover' => null,
                'cover_description' => null
            ],
            [
                'entry_id' => 5,
                'category_id' => 5,
                'title' => 'La arquitectura japonesa',
                'text' => 'La arquitectura japonesa (日本 建築) ha sido tipificada tradicionalmente por estructuras de madera, elevadas ligeramente por encima del suelo, con techos de tejas o tejas. Se usaron puertas corredizas (fusuma) en lugar de paredes, lo que permite personalizar la configuración interna de un espacio para diferentes ocasiones. La gente generalmente se sentaba en cojines o de otra manera en el piso, tradicionalmente; las sillas y las mesas altas no se usaron ampliamente hasta el siglo XX. Desde el siglo XIX, sin embargo, Japón ha incorporado gran parte de la arquitectura occidental, moderna y posmoderna en la construcción y el diseño, y es hoy un líder en tecnología y diseño arquitectónico de vanguardia.

                La arquitectura japonesa más antigua se veía en tiempos prehistóricos en simples casas de boxes y tiendas adaptadas a las necesidades de una población de cazadores-recolectores. Influencia de la dinastía Han China a través de Corea vio la introducción de almacenes de granos más complejos y cámaras funerarias ceremoniales.
                
                La introducción del budismo en Japón durante el siglo VI fue un catalizador para la construcción de templos a gran escala utilizando técnicas complicadas en madera. Influencia de las dinastías Tang y Sui chinas condujo a la fundación de la primera capital permanente en Nara. Su disposición de la calle de tablero de ajedrez utilizó la capital china de Chang’an como una plantilla para su diseño. Un aumento gradual en el tamaño de los edificios dio lugar a unidades de medida estándar, así como a refinamientos en el diseño y el diseño del jardín. La introducción de la ceremonia del té enfatizó la simplicidad y el diseño modesto como un contrapunto a los excesos de la aristocracia.
                
                Durante la Restauración Meiji de 1868, la historia de la arquitectura japonesa fue radicalmente modificada por dos eventos importantes. El primero fue la Ley de Separación de Kami y Budas de 1868, que formalmente separaba el budismo del sintoísmo y los templos budistas de los santuarios sintoístas, rompiendo una asociación entre los dos que había durado más de mil años.
                
                En segundo lugar, fue entonces cuando Japón pasó por un período de occidentalización intensa para competir con otros países desarrollados. Inicialmente, los arquitectos y los estilos del extranjero se importaron a Japón, pero poco a poco el país enseñó sus propios arquitectos y comenzó a expresar su propio estilo. Los arquitectos que volvieron de estudiar con arquitectos occidentales introdujeron el estilo internacional del modernismo en Japón. Sin embargo, no fue hasta después de la Segunda Guerra Mundial que los arquitectos japoneses hicieron una impresión en la escena internacional, primero con el trabajo de arquitectos como Kenzo Tange y luego con movimientos teóricos como el Metabolismo.
                
                Características generales de la arquitectura tradicional japonesa
                Gran parte de la arquitectura tradicional de Japón no es nativa, sino que fue importada de China y otras culturas asiáticas a lo largo de los siglos. La arquitectura tradicional japonesa y su historia están, como consecuencia, dominadas por técnicas y estilos chinos y asiáticos (presentes incluso en el Santuario Ise, considerado la quintaesencia de la arquitectura japonesa) por un lado, y por variaciones originales japonesas sobre esos temas por el otro.
                
                ',
                'author' => 'Dios',
                'created_at' => now(),
                'updated_at' => now(),
                'cover' => null,
                'cover_description' => null
            ],
            [
                'entry_id' => 6,
                'category_id' => 6,
                'title' => 'Los secretos del origami',
                'text' => '
                El origami, una antigua forma de arte japonés que transforma simples hojas de papel en intrincadas esculturas, ha evolucionado más allá de los pliegues básicos para convertirse en una expresión artística profesional. Este arte requiere más que habilidad manual; implica paciencia, atención al detalle y una comprensión profunda de las técnicas.

                Elección del Papel:
                En el mundo del origami profesional, la elección del papel es crucial. Se opta por materiales de alta calidad, generalmente finos pero resistentes, para permitir pliegues precisos sin comprometer la integridad estructural de la obra. Los colores sólidos o estampados sutiles añaden un toque adicional de elegancia a las creaciones.

                Modelos Intrincados:
                La selección del modelo desempeña un papel vital. Los artistas del origami profesional a menudo se embarcan en diseños más intrincados, desafiándose a sí mismos con formas complejas que requieren una comprensión avanzada de las técnicas. Desde figuras geométricas hasta representaciones de la naturaleza, los modelos profesionales buscan capturar la esencia y la belleza en cada pliegue.

                Detalle y Precisión:
                La diferencia entre un origami amateur y una creación profesional reside en los detalles. Cada pliegue, por más pequeño que sea, contribuye a la forma final. La precisión en la ejecución es esencial; los artistas perfeccionan sus habilidades para lograr líneas limpias y ángulos exactos.

                Técnicas Avanzadas:
                Más allá de los pliegues básicos, el mundo del origami profesional abraza técnicas avanzadas. El "wet folding" es una de ellas, donde se humedece el papel para lograr formas más orgánicas y redondeadas. Estas técnicas agregan una dimensión escultural a las creaciones, elevando el origami a un nivel artístico superior.

                El Proceso Creativo:
                El proceso creativo en el origami profesional es una fusión de habilidad técnica y visión artística. Los artistas no solo siguen instrucciones, sino que también experimentan y exploran nuevas posibilidades. Cada creación es única, reflejando el estilo personal del artista y su interpretación del arte del origami.
                ',
                'author' => 'Dios',
                'created_at' => now(),
                'updated_at' => now(),
                'cover' => null,
                'cover_description' => null
            ]
        ]);


        DB::table('entries_have_tags')->insert([
            [
                'entry_id' => 1,
                'tag_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 1,
                'tag_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 2,
                'tag_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 2,
                'tag_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 3,
                'tag_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 3,
                'tag_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 4,
                'tag_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 4,
                'tag_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 4,
                'tag_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 5,
                'tag_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 5,
                'tag_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entry_id' => 6,
                'tag_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
