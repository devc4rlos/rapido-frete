@extends('layout.single', ['titleSection' => 'Regiões Atendidas'])

@section('title', 'Regiões')

@section('single')
    <div class="animate flex flex-col gap-5">
        <x-text-large>A Rápido Frete realiza mudanças e transportes para diversas cidades e estados do Brasil. Confira as regiões que atendemos e solicite um orçamento para sua mudança.</x-text-large>
        <h2 class="font-text font-bold text-lg leading-8">Lista de Regiões Atendidas</h2>
        <div class="grid grid-cols-5 gap-10">
            <x-regions.list-city
                state="São Paulo"
                :cities="[
                'São Paulo (capital)',
                'Campinas',
                'Guarulhos',
                'São Bernardo do Campo',
                'Santo André',
                'Osasco',
                'Ribeirão Preto',
                'São José dos Campos',
                'Sorocaba',
                'Santos',
                'Mauá',
                'Jundiaí',
                'Piracicaba',
                'Bauru',
                'Mogi das Cruzes',
                'Diadema',
                'Carapicuíba',
                'Franca',
                'São Vicente',
                'Taubaté'
            ]"
            />
            <x-regions.list-city
                state="Rio de Janeiro"
                :cities="[
                'Rio de Janeiro (capital)',
                'Niterói',
                'São Gonçalo',
                'Duque de Caxias',
                'Nova Iguaçu',
                'Campos dos Goytacazes',
                'Petrópolis',
                'Volta Redonda',
                'Belford Roxo',
                'Magé',
                'Itaboraí',
                'Cabo Frio',
                'Resende',
                'Teresópolis',
                'Angra dos Reis',
                'Barra Mansa',
                'Macaé',
                'Maricá',
                'Queimados',
                'Nilópolis'
            ]"
            />
            <x-regions.list-city
                state="Minas Gerais"
                :cities="[
                'Belo Horizonte (capital)',
                'Uberlândia',
                'Contagem',
                'Juiz de Fora',
                'Betim',
                'Montes Claros',
                'Uberaba',
                'Ribeirão das Neves',
                'Governador Valadares',
                'Ipatinga',
                'Sete Lagoas',
                'Divinópolis',
                'Santa Luzia',
                'Ibirité',
                'Poços de Caldas',
                'Patos de Minas',
                'Teófilo Otoni',
                'Pouso Alegre',
                'Barbacena',
                'Varginha'
            ]"
            />
            <x-regions.list-city
                state="Paraná"
                :cities="[
                'Curitiba (capital)',
                'Londrina',
                'Maringá',
                'Ponta Grossa',
                'Cascavel',
                'São José dos Pinhais',
                'Foz do Iguaçu',
                'Colombo',
                'Guarapuava',
                'Paranaguá',
                'Apucarana',
                'Toledo',
                'Araucária',
                'Campo Largo',
                'Umuarama',
                'Pinhais',
                'Almirante Tamandaré',
                'Cambé',
                'Paranavaí',
                'Arapongas'
            ]"
            />
            <x-regions.list-city
                state="Rio Grande do Sul"
                :cities="[
                'Porto Alegre (capital)',
                'Caxias do Sul',
                'Canoas',
                'Pelotas',
                'Santa Maria',
                'Gravataí',
                'Novo Hamburgo',
                'Viamão',
                'São Leopoldo',
                'Rio Grande',
                'Alvorada',
                'Passo Fundo',
                'Sapucaia do Sul',
                'Uruguaiana',
                'Cachoeirinha',
                'Bagé',
                'Bento Gonçalves',
                'Guaíba',
                'Santa Cruz do Sul',
                'Erechim'
            ]"
            />
            <x-regions.list-city
                state="Santa Catarina"
                :cities="[
                'Florianópolis (capital)',
                'Joinville',
                'Blumenau',
                'São José',
                'Criciúma',
                'Chapecó',
                'Itajaí',
                'Jaraguá do Sul',
                'Palhoça',
                'Lages',
                'Balneário Camboriú',
                'Brusque',
                'Tubarão',
                'Caçador',
                'Concórdia',
                'Camboriú',
                'São Bento do Sul',
                'Navegantes',
                'Biguaçu',
                'Mafra'
            ]"
            />
            <x-regions.list-city
                state="Bahia"
                :cities="[
                'Salvador (capital)',
                'Feira de Santana',
                'Vitória da Conquista',
                'Camaçari',
                'Itabuna',
                'Juazeiro',
                'Ilhéus',
                'Lauro de Freitas',
                'Jequié',
                'Teixeira de Freitas',
                'Alagoinhas',
                'Porto Seguro',
                'Simões Filho',
                'Eunápolis',
                'Paulo Afonso',
                'Santo Antônio de Jesus',
                'Valença',
                'Barreiras',
                'Jacobina',
                'Serrinha'
            ]"
            />
            <x-regions.list-city
                state="Pernambuco"
                :cities="[
                'Recife (capital)',
                'Jaboatão dos Guararapes',
                'Olinda',
                'Caruaru',
                'Petrolina',
                'Paulista',
                'Cabo de Santo Agostinho',
                'Camaragibe',
                'Garanhuns',
                'Vitória de Santo Antão',
                'Igarassu',
                'Abreu e Lima',
                'São Lourenço da Mata',
                'Santa Cruz do Capibaribe',
                'Serra Talhada',
                'Carpina',
                'Belo Jardim',
                'Arcoverde',
                'Ouricuri',
                'Salgueiro'
            ]"
            />
            <x-regions.list-city
                state="Goiás"
                :cities="[
                'Goiânia (capital)',
                'Aparecida de Goiânia',
                'Anápolis',
                'Rio Verde',
                'Luziânia',
                'Águas Lindas de Goiás',
                'Valparaíso de Goiás',
                'Trindade',
                'Formosa',
                'Novo Gama',
                'Itumbiara',
                'Senador Canedo',
                'Catalão',
                'Jataí',
                'Planaltina',
                'Caldas Novas',
                'Goianésia',
                'Cidade Ocidental',
                'Cristalina',
                'Mineiros'
            ]"
            />
        </div>
    </div>

    <div class="animate flex flex-col gap-5">
        <h2 class="font-text font-bold text-lg leading-8">Perguntas Frequentes</h2>
        <div class="flex flex-col gap-5 max-w-5xl mx-auto">
            <x-question-response
                question="Vocês atendem mudanças para outras cidades além das listadas?"
                response="Sim! Se a sua cidade não está na lista, entre em contato para verificar a possibilidade de atendimento."
                theme="light"
            />
            <x-question-response
                question="Quanto tempo leva uma mudança para outro estado?"
                response="O tempo pode variar de acordo com a distância e logística. Nossa equipe entrará em contato para fornecer prazos detalhados."
                theme="light"
            />
        </div>
    </div>

    <div class="animate flex flex-col gap-5">
        <x-text-large>Se sua cidade não estiver listada, entre em contato para verificar a possibilidade de atendimento. A Rápido Frete está sempre expandindo suas operações para melhor atender seus clientes.</x-text-large>
        <x-link-main>Solicitar orçamento</x-link-main>
    </div>
@endsection
