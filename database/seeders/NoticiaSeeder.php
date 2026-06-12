<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("noticias")->insert([
            [
                'titulo' => 'Inteligência Artificial Revoluciona Atendimento ao Cliente',
                'resumo' => 'Empresas adotam IA para melhorar a experiência dos consumidores.',
                'conteudo' => 'Diversas empresas de tecnologia estão investindo em sistemas de inteligência artificial capazes de atender clientes de forma automatizada. As novas soluções utilizam processamento de linguagem natural para compreender solicitações complexas e oferecer respostas mais precisas, reduzindo o tempo de espera e aumentando a satisfação dos usuários.',
                'imagem' => 'ia-atendimento.jpg',
                'categoria_id' => '1',
                'usuario_id' => '1',
                'ativo' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Startup Brasileira Desenvolve Bateria com Maior Autonomia',
                'resumo' => 'Nova tecnologia promete aumentar a duração de dispositivos móveis.',
                'conteudo' => 'Uma startup brasileira anunciou o desenvolvimento de uma bateria baseada em novos materiais que oferecem até 40% mais autonomia em comparação às baterias convencionais. A inovação poderá beneficiar smartphones, notebooks e veículos elétricos nos próximos anos.',
                'imagem' => 'bateria-autonomia.jpg',
                'categoria_id' => '1',
                'usuario_id' => '1',
                'ativo' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Computação Quântica Avança com Novo Processador Experimental',
                'resumo' => 'Pesquisadores alcançam marco importante na área quântica.',
                'conteudo' => 'Cientistas apresentaram um processador quântico experimental capaz de realizar cálculos complexos com maior estabilidade. O avanço representa um passo significativo para a aplicação prática da computação quântica em áreas como criptografia, pesquisa científica e inteligência artificial.',
                'imagem' => 'computacao-quantica.jpg',
                'categoria_id' => 2,
                'usuario_id' => '1',
                'ativo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Atualização de Sistema Operacional Melhora Segurança Digital',
                'resumo' => 'Novos recursos visam proteger usuários contra ameaças virtuais.',
                'conteudo' => 'Uma grande empresa de software lançou uma atualização que inclui mecanismos avançados de detecção de malware, autenticação reforçada e melhorias na privacidade. Especialistas recomendam que os usuários atualizem seus dispositivos para aproveitar as novas proteções.',
                'imagem' => 'seguranca-digital.jpg',
                'categoria_id' => 2,
                'usuario_id' => '1',
                'ativo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Realidade Aumentada Ganha Espaço no Setor Educacional',
                'resumo' => 'Escolas começam a utilizar tecnologia imersiva em sala de aula.',
                'conteudo' => 'Instituições de ensino estão adotando recursos de realidade aumentada para tornar o aprendizado mais interativo. Com o uso de tablets e óculos inteligentes, estudantes podem visualizar modelos tridimensionais de objetos e fenômenos, facilitando a compreensão de conteúdos complexos.',
                'imagem' => 'realidade-aumentada.jpg',
                'categoria_id' => 3,
                'usuario_id' => '1',
                'ativo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
