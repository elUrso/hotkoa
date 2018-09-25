-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2018 at 09:20 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instit93_concurso2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions2018`
--

CREATE TABLE `subscriptions2018` (
  `id` int(11) NOT NULL,
  `firstname` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `secondname` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `rg` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `cpf` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `cep` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `street` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `street2` mediumtext COLLATE utf8_unicode_ci,
  `number` mediumtext COLLATE utf8_unicode_ci,
  `area` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `city` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `email` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `ddd1` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `phone1` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `ddd2` mediumtext COLLATE utf8_unicode_ci,
  `phone2` mediumtext COLLATE utf8_unicode_ci,
  `role` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `degree` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `institution` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `unity` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `theme` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `date` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `video` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `summary` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `members` mediumtext COLLATE utf8_unicode_ci,
  `partners` mediumtext COLLATE utf8_unicode_ci,
  `agree` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `pdf` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `hashkey` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscriptions2018`
--

INSERT INTO `subscriptions2018` (`id`, `firstname`, `secondname`, `rg`, `cpf`, `cep`, `street`, `street2`, `number`, `area`, `city`, `state`, `email`, `ddd1`, `phone1`, `ddd2`, `phone2`, `role`, `degree`, `institution`, `unity`, `category`, `theme`, `title`, `date`, `video`, `summary`, `members`, `partners`, `agree`, `pdf`, `hashkey`, `status`) VALUES
(8, 'Elmara', 'Pereira de Souza', '2033008-15', '45070016504', '45028610', 'Av. Olívia Flores', 'Ed. Wellington do Prado, apt. 102', '1251', 'Candeias', 'Vitória da Conquista', 'BA', 'elmarasouza@gmail.com', '77', '991030103', '77', '34237874', 'Professora', 'Doutora de Difusão do Conhecimento (UFBA), Mestre em Educação (UFRGS), Especialista em Aplicações pedagógica dos computadores (UCSAL), Ciência da Computação (UESB), Informática na Educação (PUC-MG), Mídias na Educação (UESB), Educação a Distância (UNEB), Graduada em Letras com Inglês (UESB).', 'Centro Juvenil de Ciência e Cultura', 'Escola Estadual vinculda à Secretaria de Educação do Estado da Bahia', 'EM', 'Incubadora de projetos', 'Incubadora de projetos: desenvolvimento de aplicativos, jogos e animações digitais como ação educativa e estratégia para a produção do conhecimento no ensino médio.', '2017-03-06', 'https://www.youtube.com/watch?v=gC7_l9dPSjo&amp;feature=youtu.be', 'Pensando em uma educação transformadora, criamos no Centro Juvenil a Incubadora de Projetos como possibilidade de proporcionar aos alunos do ensino médio da rede pública um espaço de autoria para que eles possam desenvolver projetos inovadores. Na Incubadora a participação é voluntária. O objetivo é que seja um espaço aberto e produtivo em que os alunos possam exercitar a criatividade e produzir conhecimentos. Foram desenvolvidos projetos relacionados à saúde na adolescência (Jogo Choices), sustentabilidade (Animação “Você tem atitudes sustentáveis?”), combate ao mosquito da Dengue (Jogo Aedes Adventure). Esses projetos foram premiados (Menção honrosa na SBPC, Moção de Aplauso da Câmara de Vereadores, 3º lugar no Edital FAPESB, faz parte do Banco de Práticas Inspiradoras do MEC) e os alunos apresentaram em eventos como SBPC, FEBRACE, Campus Party, Encontro Estudantil. Estão sendo desenvolvidos os aplicativos: Espaços públicos e Trip Quest. Na Incubadora, sem a rigidez da sala de aula, sem a imposição de conteúdos pré-definidos, os alunos aprendem naturalmente uns com os outros. Esses projetos estão aproximando a educação básica da universidade, mudando a vida desses meninos(as) e de suas famílias e possibilitando perspectiva de futuro. Como educadora, confio no potencial desses jovens e acredito em uma educação pública de qualidade. Essa experiência demonstra que é possível criar espaços de autoria para que os alunos não sejam meros usuários, mas autores de conteúdos educacionais e propostas socialmente relevantes. Todas as produções, reportagens e prêmios recebidos estão disponíveis no repositório http://cjccvc.org/course/view.php?id=22', 'Roberto Andrade Costa -341258765-68 - Professor\r\nAdriana Santos Sousa - 573600735-53 - Adriana', 'Polo de Vitória da Conquista da Universidade Aberta do Brasil\r\nUniversidade Estadual do Sudoeste da Bahia\r\nFaculdade de Tecnologia e Ciências - Vitória da Conquista - BA', '1', '0', '45070016504EM', 'Enviado'),
(9, 'Marcelo', 'Falco de Deus', '33.429.356-x', '30787633828', '04713001', 'Rua da Paz', 'apto 51', '1313', 'Chácara Santo Antônio', 'São Paulo', 'SP', 'mfalco@gmail.com', '11', '989065014', '', '', 'Professor Universitário', 'Mestre', 'Universidade Anhembi Morumbi', 'Campus Morumbi', 'EI', 'INTERFACES INTERATIVAS PARA DALTÔNICOS', 'DESIGN ACESSÍVEL: UM ESTUDO DE INTERFACE DIGITAL PARA DALTÔNICOS', '2018-06-19', 'https://www.behance.net/gallery/66379571/Daltoon-Design-Kit?', 'O trabalho a seguir aborda os principais conceitos do daltonismo, seus tipos, diferenças e como as cores afetam sua percepção em interfaces digitais de acordo com a teoria e psicologia das cores, modificando sua usabilidade e experiência do usuário em determinado ambiente. Além disso, mostra exemplos de como esse problema foi solucionado, apresentado cases de projetos desenvolvidos a fim de facilitar a navegação de pessoas com daltonismo.', 'Aline Fernandes\r\nCaio Nagano\r\nCristhian da Cruz Nogueira\r\nJoyce Lima Silva\r\nNatalia Bernardo Matias\r\nMarcelo Falco de Deus', 'Universidade Anhembi Morumbi', '1', '0', '30787633828EI', 'Enviado'),
(13, 'Mariana', 'Calbucci', '459857770', '31999483839', '05729090', 'Rua Alexandre benois', '', '17', 'Vila Andrade', 'São Paulo', 'SP', 'projetomaozinha@gmail.com', '11', '972277201', '11', '23859774', 'Sócia proprietária', 'Psicologia', 'Universidade Paulista', 'UNIP', 'EI', 'Artes, cultura, saúde, consciência corporal e ambiental.', 'Projeto Mãozinha', '2015-01-25', 'https://www.youtube.com/watch?v=vuQbP-wNfAU', 'Iniciamos em 2015 as nossas oficinas e vivências para crianças e adolescentes em condomínios e depois atuamos em clubes e eventos. Hoje visamos atuar em comunidades, escolas e com pessoas em situação de rua.\r\nPrezamos os valores humanos, a cooperação, o respeito, a alteridade, a conscientização ambiental, o autoconhecimento através de exercícios de Yoga e oficinas terapêuticas. Artes em todas vertentes, expressão corporal e temos apoio de pediatras, nutricionistas, educadores físicos, assistentes sociais, pedagogos, entre outros.\r\nQueremos atuar em contra turno escolar e proporcionar a proteção, o cuidado e o desenvolvimento saudável para crianças e seus familiares.', 'Sergio Martin CPF: 018.597.347-74', '', '1', '0', '31999483839EI', 'Enviado'),
(14, 'Lucas', 'Moraes Silva', '487430128', '44274501809', '04386030', 'Avenida Durval Pinto Ferreira', 'Casa', '395', 'Jardim Itacolomi', 'São Paulo', 'SP', 'lucasmoraes.silva@hotmail.com', '11', '55644883', '11', '960739873', 'Estudante', 'Ciências Da Computação', 'Faculdade Das Ámericas', 'Augusta', 'ES', 'Tecnologia Assistiva', 'Prancha de Comunicação', '2017-04-15', 'https://youtu.be/g5f5Xl7tS1M', 'O talk pictograms é uma tecnologia assistiva,voltado para pessoas que não possuem fala ou escrita funcional,seu grande diferencial é ser simples e intuito, diferente das outras tecnologias de comunicação disponíveis para uso,possui também o Modo talk,onde você escreve aquilo que deseja e senti,facilitando ainda mais a comunicação entre seu meio social.', 'Lucas Petarnella Zimmermann\r\nRG 560256759\r\nCpf 42811016830\r\nlucasp.zimmermann@gmail.com\r\nContato 980363993\r\nDesigner', '', '1', '0', '44274501809ES', 'Enviado'),
(15, 'Isabel', 'Pagnoncelli', '10.437.097', '04647773809', '18683230', 'Rua Hermínio Capelari', 'casa', '85', 'Santa Cecilia', 'Lençois Paulista', 'SP', 'pagnoncelliicf@gmail.com', '14', '32633168', '14', '997123948', 'Coordenadora Pedagógica', 'Superior completo', 'EMEIF PROFa. Amélia Benta do Nascimento Oliveira', 'Escola', 'EFI', 'socioemocional', 'Círculo do Amor', '2018-10-13', 'https://youtu.be/GTOsbIJzWjs', 'O Projeto buscou a integração da antiga sabedoria com a ciência moderna. A intencionalidade é de um programa simples e eficaz para construir o caráter, restaurar o equilíbrio emocional e revigorar os laços afetivos em um “Círculo de Amor”, de modo a ajudar crianças e adultos a abrirem seus corações, tendo em vista uma escola, onde todos possam sentir prazer em permanecer neste ambiente com energia boa e clima agradável. Conta com ações para um aprofundamento dentro de si, o autocontrole das emoções negativas e seus reflexos na saúde e na vida, desenvolvendo competências socioemocionais. Já apresenta    diminuição do número de ocorrências nos intervalos e no aumento das notas.E, resultados positivos na avaliação formativa do comportamento dos alunos e dos sujeitos envolvidos na aprendizagem e na formação do aluno. Concluímos que ao promovermos a prática de mindfulness, algumas posturas de ioga e biopsicologia  para os sujeitos da aprendizagem e aos profissionais que cuidam da formação integral do aluno, encontramos benefícios significativos, nomeadamente no bem-estar dos envolvidos, no aumento de comportamento pró-sociais, na redução de problemas de comportamento, na melhoria de resultados acadêmicos, no processo de regulação emocional, na satisfação com o trabalho e na capacidade de detenção para notar detalhes. Assim, tanto crianças como adultos aprendem a colocar em prática as melhores atitudes e habilidades para controlar emoções, alcançar objetivos, demonstrar empatia, manter relações sociais positivas e tomar decisões de maneira responsável, entre outros.', '', '', '1', '0', '04647773809EFI', 'Enviado'),
(16, 'Danielle', 'Ferreira Auriemo', '24626209-6', '19703991807', '13505020', 'Rua M 1A', '', '1585', 'Jardim Floridiana', 'Rio Claro', 'SP', 'daniauriemo@yahoo.com.br', '19', '997048752', '', '', 'Professora', 'Doutora em Desenvolvimento Humano e tecnologias', 'Prefeitura Municipal de Rio Claro', 'Escola Municipal João Batista Maule', 'XA', 'Xadrez e Educação', 'Xadrez em sala de aula: contribuições implícitas na pratica do jogo', '2018-02-05', 'https://youtu.be/QP4r-GcPwcs', 'O presente projeto esta baseado no ensino de xadrez para alunos matriculados no 5 ano da referida escola. A turma é composta por 23 alunos, que em anos anteriores apresentaram comportamento em sala bem agitado, grande parte dos alunos estão juntos há anos, se conheceram na educação infantil. Diante desta realidade assumi em fevereiro deste ano a sala, e em parceira com a equipe Gestora, Diretora Angela Aparecida Martini, da vice-diretora Flávia Piccoli Traina e da professora coordenadora Rosy Gonçalves, esta última acompanhando as aulas e, de fora sugerindo algumas atividades, mesmo sem ter pleno conhecimento do jogo. As aulas ocorrem semanalmente, ministradas por mim. Os alunos não tinham conhecimento do jogo, partimos do zero, explicando a historia do xadrez até chegar a pratica do xadrez. Inicialmente há a parte expositiva e na sequencia fazemos uso dos pre-jogos para assimilar a movimentação das peças, e assim poderem em todas as aulas terem contado com as peças. Também foi feito um livro de xadrez no qual os próprios alunos foram os autores, entre outras atividades educativas realizadas no decorrer do ano letivo, que se encerra apenas em dezembro. Durante esse período, fui trabalhando alguns aspectos de companheirismo, respeito, ética e fui notando algumas mudanças de comportamentos. Acredito que ao final do ano os alunos mostraram melhora nos aspectos relativos ao processo ensino aprendizagem bem como aos aspectos de socialização e cognitivos.', 'Danielle Ferreira Auriemo - CPF 197039918-07 - Professora\r\nRosy Gonçalvez - CPF 223115948-89 - Prof. Coordenadora', '', '1', '0', '19703991807XA', 'Enviado');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscriptions2018`
--
ALTER TABLE `subscriptions2018`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hashkey` (`hashkey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscriptions2018`
--
ALTER TABLE `subscriptions2018`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
