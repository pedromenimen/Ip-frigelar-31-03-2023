<?php

include 'includes/header.php'; ?>


<section id="how-work" class="shell">
	<div class="imagem-shell">
		<img class="imagem-topo" src="./img/Imagem-Topo.png?v=caching15062022">
	</div>
	<div class="shell">
		<div class="image-text-container">
			<img class="box-titulo" src="./img/Box-Titulo-H1.png?v=caching15062022">

		</div>
		<div class="boxes-content">
			<div class="content-left">
				<div class="shell-text">
					<span class="como-funciona">Como funciona</span>
					<span class="ar-icon">um ar-condicionado split<i class="ico-question"></i></span>
				</div>

				<p class="saiba-exatamente">
					Saiba exatamente como funciona um <span><strong>ar-condicionado</strong></span> e quais as peças que
					são responsáveis por
					refrigerar e/ou aquecer o seu ambiente e entenda a diferença entre Ar-condicionado
					<span><strong>convencional</strong></span> e
					<span><strong>inverter</strong></span>.

				</p>

				<div class="outline-text-container">
					<img class="box-titulo-h2" src="./img/Box-Titulo-H2.png?v=caching15062022">
					<div class="shell-text-h2">
						<span class="principais-peças">Principais Peças</span>
						<span class="ar-con">do ar-condicionado</span>
					</div>
				</div>

				<div class="outline-text-container-desktop">
					<img class="box-titulo-h2-left" src="./img/Box-Titulo-h2-left.png?v=caching15062022">
					<div class="shell-text-h2-left">
						<span class="principais-peças">Principais Peças</span>
						<span class="ar-con">do ar-condicionado</span>
					</div>
				</div>



			</div>
			<div class="content-right">
				<img class="imagem-topo-right" src="./img/Imagem-Topo-right.png?v=caching15062022">
				<img class="ar-separacao" src="./img/Ar-separacao.png?v=caching15062022">
			</div>
		</div>
		<div class="boxes-container">
			<p class="em-geral">
				Em geral, um aparelho de ar-condicionado split é composto por duas partes: a <strong> evaporadora
					(unidade interna) </strong> e a <strong> condensadora (unidade externa) </strong> :

			</p>

			<div class="boxes">
				<div class="sm-box-up">
					<img class="evaporador" src="./img/Evaporadora-Graphic.png?v=caching15062022">
					<p class="evap-text">
						EVAPORADORA
					</p>
					<p>(unidade interna)</p>
				</div>
				<div class="sm-box-down">
					<img class="condensador" src="./img/Condensadora-Graphic.png?v=caching15062022">
					<p class="evap-text">CONDENSADORA</p>
					<p>(unidade externa)</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="air-parts">
	<div class="faixa-titulo-container">
		<img class="faixa-titulo" src="./img/Faixa-Titulo-sessao-mob.png?v=caching15062022">
		<img class="faixa-titulo-desk" src="./img/Faixa-Titulo-sessao-desk.png?v=caching15062022">
		<p class="faixa-titulo-text">
			Entenda o funcionamento:
		</p>
	</div>
	<div class="shell">


		<div class="boxes-content">
			<img class="bg" src="./img/Estrutura-Ares-Desktop.png">
			<div class="content-left">
				<div class="box-air">
					<div class="condensadora-container">
						<div class="condensadora-titulo">
							<p class="condensadora">
								CONDENSADORA
							</p>
							<p class="unidade-externa">&nbsp;
								(<strong>unidade externa</strong>)
							</p>
						</div>
						<p class="condensadora-paragrafo">
							Normalmente, na condensadora contém o compressor, a serpentina e o motor ventilador do
							aparelho. Este último, inclusive, é o responsável pelo seu resfriamento.
						</p>
						<div class="condensadora-info-container">
							<img class="destaque-condensadora" src="./img/Destaque-condensadora.png?v=caching15062022">
							<p class="destaque-condensadora-text">
								<strong>Vale destacar que</strong>, ainda na unidade externa, ficam os capacitores, as
								placas eletrônicas e os componentes elétricos.
							</p>
						</div>
					</div>


					<img class="bg-mb" src="./img/Estrutura-Ares-Mobile.png">

				</div>
			</div>
			<div class="content-right">

				<div class="evaporadora-container">
					<div class="evaporadora-titulo">
						<p class="evaporadora">
							EVAPORADORA
						</p>
						<p class="unidade-interna">&nbsp;
							(<strong>unidade interna</strong>)
						</p>
					</div>
					<p class="evaporadora-paragrafo">
						Na unidade interna (evaporadora) se encontram o evaporador, as placas eletrônicas que controlam
						o aparelho e as aletas. Além, é claro, de outras peças responsáveis pelo funcionamento do seu
						ar-condicionado.
					</p>
				</div>

			</div>
		</div>
	</div>
</section>

<section id="compressor">
	<div class="shell">
		<div class="faixa-titulo-container-compressor">
			<img class="faixa-titulo-compressor" src="./img/Faixa-Titulo-sessao-mob.png?v=caching15062022">
			<img class="faixa-titulo-compressor-desk" src="./img/Faixa-Titulo-sessao-desk.png?v=caching15062022">
			<p class="faixa-titulo-compressor-text">
				Estrutura de um compressor:
			</p>
		</div>
		<div class="compressor-images">
			<div>
				<script>
					function toggleCpliPathPistaoOver() {
						const img = document.getElementById("pistao-btn");
						img.style.clipPath = 'polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)';
					}
					function toggleCpliPathPistaoOut() {
						const img = document.getElementById("pistao-btn");
						img.style.clipPath = 'circle(11% at 7% 51%)';
					}
					function toggleCpliPathPoliaOver() {
						const img = document.getElementById("polia-btn");
						img.style.clipPath = 'polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)';
					}
					function toggleCpliPathPoliaOut() {
						const img = document.getElementById("polia-btn");
						img.style.clipPath = 'circle(11% at 7% 51%)';
					}
					function toggleCpliPathCamaraOver() {
						const img = document.getElementById("camara-btn");
						img.style.clipPath = 'polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)';
					}
					function toggleCpliPathCamaraOut() {
						const img = document.getElementById("camara-btn");
						img.style.clipPath = 'circle(11.0% at 93% 51%)';
					}
				</script>
				<img src="./img/btn-conteudo-pistao.jpg" alt="Ajuda no desempenho do aparelho regulando a saída de gás."
					class="pistao-btn" id="pistao-btn" onmouseover="toggleCpliPathPistaoOver()"
					onmouseout="toggleCpliPathPistaoOut()">
				<img src="./img/btn-conteudo-polia.jpg" alt="Responsável pela transferência de energia para o aparelho."
					class="polia-btn" id="polia-btn" onmouseover="toggleCpliPathPoliaOver()"
					onmouseout="toggleCpliPathPoliaOut()">
				<img src="./img/btn-conteudo-camara.jpg" alt="Evita que o ar refrigerado volte para o compressor."
					class="camara-btn" id="camara-btn" onmouseover="toggleCpliPathCamaraOver()"
					onmouseout="toggleCpliPathCamaraOut()">
			</div>
			<div>
				<img class="compressor-desk" src="./img/compressor-bg.png">
				<img class="compressor-mb" src="./img/compressor-bg-mb.png">
			</div>
		</div>
		<div class="list">
			<ul>
				<li>
					<p><strong> 1. Câmara de Sucção:</strong> Evita que o ar refrigerado volte para o compressor.</p>
				</li>
				<li>
					<p><strong> 2. Pistão: </strong> Ajuda no desempenho do aparelho regulando a saída de gás.</p>
				</li>
				<li>
					<p><strong> 3. Saída da câmara</strong></p>
				</li>
				<li>
					<p><strong> 4. Entrada e saída de válvulas</strong></p>
				</li>
				<li>
					<p><strong> 5. Disco inclinado</strong></p>
				</li>
				<li>
					<p><strong> 6. Mecanismo de ajuste</strong></p>
				</li>
				<li>
					<p><strong> 7. Eixo de transmissão</strong></p>
				</li>
				<li>
					<p><strong> 8. Calço ou sapata</strong></p>
				</li>
				<li>
					<p><strong> 9. Polia: </strong> Responsável pela transferência de energia para o aparelho</p>
				</li>
				<li>
					<p><strong> 10. Base do Compressor</strong></p>
				</li>
				<li>
					<p><strong> 11. Placa do eixo</strong></p>
				</li>
			</ul>
		</div>
	</div>
</section>

<section id="economia">
	<div class="shell">
		<div class="outline-text-container">
			<img class="box-titulo-h2" src="./img/Box-Titulo-H2.png?v=caching15062022">
			<div class="shell-text-h2">
				<span class="principais-peças">Entenda a economia</span>
				<span class="ar-con">do ar-condicionado</span>
			</div>
		</div>
		<div class="outline-text-container-desktop">
			<img class="box-titulo-h2-left" src="./img/Box-Titulo-h2-left.png?v=caching15062022">
			<div class="shell-text-h2-left">
				<span class="principais-peças">Entenda a economia</span>
				<span class="ar-con">do ar-condicionado</span>
			</div>
		</div>
		<div class="economia-shell">
			<div class="economia-text-container">
				<p class="economia-text">
					Apesar de ter um valor de custo um pouco inferior à um aparelho com a tecnologia inverter, o split
					convencional acaba consumindo mais energia durante a sua utilização.
				</p>
				<div class="content-right">
					<img class="foto-economia" src="./img/Foto-Economia.png?v=caching15062022">
					<img class="ar-separacao-economia" src="./img/Ar-separacao.png?v=caching15062022">
				</div>
			</div>
			<div class="economia-shell-container">
				<div class="comparativo-container">
					<script>
						function closePopUp() {
							const container = document.getElementById("popup-container");
							const xIcon = document.getElementById("x-icon");
							container.innerText = ""
							container.style.display = "none"

						}
						function putTextInsidePopUp(text, className) {
							const element = document.getElementById("popup-container");
							element.style.display = "block"
							const popupText = document.createElement("div")
							const xIcon = document.createElement("div")
							popupText.className = className
							popupText.id = "popup-text"
							popupText.innerText = text
							xIcon.id = "x-icon"
							const container = document.getElementById("popup-container")
							container.appendChild(popupText)
							xIcon.onclick = closePopUp
							container.appendChild(xIcon)
						}
					</script>
					<p class="comparativo">COMPARATIVO ENTRE MODELOS INVERTER E NÃO INVERTER:</p>
					<p class="clique">Clique nos botões para ver os detalhes.</p>
					<div id="popup-container">
					</div>
					<div class="comparativo-grafico">
						<img class="desktop-only" class="grafico-economia" id="grafico-economia"
							src="./img/graphic-inverter-desktop.jpg" usemap="#image-map-desktop">
						<map class="desktop-only" name="image-map-desktop">
							<area class="teste"
								onclick="putTextInsidePopUp('O ar-condicionado inverter atinge rapidamente a zona confortável.', 'green-color')"
								coords="250,14,15" shape="circle">
							<area class="teste"
								onclick="putTextInsidePopUp('O ar-condicionado convencional necessita de um tempo um pouco maior de operação para atingir a temperatura confortável.', 'black-color')"
								coords="275,213,14" shape="circle">
							<area class="teste"
								onclick="putTextInsidePopUp('O Ar-condicionado inverter ajusta o Seu Compressor para funcionar de forma continua, o que gera maior economia.', 'green-color')"
								coords="334,13,15" shape="circle">
							<area class="teste"
								onclick="putTextInsidePopUp('O compressor do ar-condicionado convencional, funciona de forma interrnitente, ligando e desligando, 0 qu gera maior consumo de energia.', 'black-color')"
								coords="368,213,13" shape="circle">
							<area class="teste"
								onclick="putTextInsidePopUp('AS Constantes variações do compressor no ar-condicionado convencional, geram um ambiente que oscila entre temperaturas muito frias e muito quentes.', 'black-color')"
								coords="530,13,13" shape="circle">
							<area class="teste"
								onclick="putTextInsidePopUp('O funcionamento constante do compressor ar-condicionado inverter, mantém a temperatura confortável o tempo todo.', 'green-color')"
								coords="624,13,14" shape="circle">
						</map>
						<img class="mobile-only" class="grafico-economia" id="grafico-economia"
							src="./img/graphic-inverter-mobile.jpg" usemap="#image-map-mobile">
						<map class="mobile-only" name="image-map-mobile">
							<area
								onclick="putTextInsidePopUp('O ar-condicionado inverter atinge rapidamente a zona confortável.', 'green-color')"
								coords="231,20,21" shape="circle">
							<area
								onclick="putTextInsidePopUp('O ar-condicionado convencional necessita de um tempo um pouco maior de operação para atingir a temperatura confortável.', 'black-color')"
								coords="243,312,21" shape="circle">
							<area
								onclick="putTextInsidePopUp('O compressor do ar-condicionado convencional, funciona de forma interrnitente, ligando e desligando, o que gera maior consumo de energia.', 'black-color')"
								coords="306,311,20" shape="circle">
							<area
								onclick="putTextInsidePopUp('O Ar-condicionado inverter ajusta o seu compressor para funcionar de forma continua, o que gera maior economia.', 'green-color')"
								coords="355,20,19" shape="circle">
							<area
								onclick="putTextInsidePopUp('AS Constantes variações do compressor no ar-condicionado convencional, geram um ambiente que oscila entre temperaturas muito frias e muito quentes.', 'black-color')"
								coords="406,312,20" shape="circle">
							<area
								onclick="putTextInsidePopUp('O funcionamento constante do compressor ar-condicionado inverter, mantém a temperatura confortável o tempo todo.', 'green-color')"
								coords="460,21,19" shape="circle">
						</map>
						<img class="mobile-smaller-only" class="grafico-economia" id="grafico-economia"
							src="./img/graphic-inverter-mobile-smaller.jpg" usemap="#image-map-mobile-smaller">
						<map class="mobile-smaller-only" name="image-map-mobile-smaller">
							<area
								onclick="putTextInsidePopUp('O ar-condicionado inverter atinge rapidamente a zona confortável.', 'green-color')"
								coords="154,14,13" shape="circle">
							<area
								onclick="putTextInsidePopUp('O ar-condicionado convencional necessita de um tempo um pouco maior de operação para atingir a temperatura confortável.', 'black-color')"
								coords="162,206,14" shape="circle">
							<area
								onclick="putTextInsidePopUp('O compressor do ar-condicionado convencional, funciona de forma interrnitente, ligando e desligando, o que gera maior consumo de energia.', 'black-color')"
								coords="203,207,15" shape="circle">
							<area
								onclick="putTextInsidePopUp('O Ar-condicionado inverter ajusta o seu compressor para funcionar de forma continua, o que gera maior economia.', 'green-color')"
								coords="236,13,14" shape="circle">
							<area
								onclick="putTextInsidePopUp('AS Constantes variações do compressor no ar-condicionado convencional, geram um ambiente que oscila entre temperaturas muito frias e muito quentes.', 'black-color')"
								coords="271,207,13" shape="circle">
							<area
								onclick="putTextInsidePopUp('O funcionamento constante do compressor ar-condicionado inverter, mantém a temperatura confortável o tempo todo.', 'green-color')"
								coords="306,13,14" shape="circle">
						</map>
					</div>
				</div>
				<p class="economia-paragrafo">O ar tradicional sofre mais oscilações de temperatura, já que o seu
					compressor desliga sempre que a temperatura chega no ápice de refrigeração. Essas oscilações exigem
					um maior consumo de energia, afetando diretamente a sua conta de luz.</p>
			</div>
		</div>
	</div>
</section>

<section id="account">
	<div class="shell">
		<div class="faixa-titulo-container-account">
			<img class="faixa-titulo-account-desk" src="./img/Faixa-Titulo-sessao-desk.png?v=caching15062022">
			<img class="faixa-titulo-account" src="./img/Faixa-Titulo-sessao-mob.png?v=caching15062022">
			<p class="faixa-titulo-account-text">
				ECONOMIZE COM UM APARELHO INVERTER
			</p>
		</div>
		<div class="account-data-desk">
			<img class="icon-search" src="./img/icon-search.jpg?v=caching15062022">
			<div class="lupa-text">
				<p class="lupa-text-content">
					Confira a diferença de consumo entre os dois modelos:
				</p>
				<div class="main-text-container">
					<div class="container-one">
						<p class="account-data-main-text">
							Foi considerando para o cálculo o Ar Condicionado Split High Wall Samsung Só Frio
							AR18TRHQCURNAZ 220V, que consome em média
						</p>
						<p class="potencia-kwh">
							19,46 kWh
						</p>
					</div>
					<div class="container-two">
						<p class="account-data-main-text">
							Dados com base em um aparelho de:
						</p>
						<div class="potencia-btu">
							<p class="numeros-potencia">18.000</p>&nbsp;
							<p class="unidade-potencia">BTUs</p>
						</div>
					</div>
					<div class="container-two">
						<p class="account-data-main-text">
							Considerando um consumo médio de:
						</p>
						<div class="consumo-medio">
							<p>
								<span class="numeros-hora-consumo">8</span>
								<span class="texto-consumo"> horas por 30 dias</span>
							</p>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="account-data-mb">
			<div class="lupa-text">
				<img class="icon-search" src="./img/icon-search.jpg?v=caching15062022">
				<p class="lupa-text-content">
					Confira a diferença de consumo entre os dois modelos:
				</p>
			</div>
			<p class="account-data-main-text">
				Foi considerando para o cálculo o Ar Condicionado Split High Wall Samsung Só Frio AR18TRHQCURNAZ 220V,
				que consome em média
			</p>
			<p class="potencia-kwh">
				19,46 kWh
			</p>
			<p class="account-data-main-text">
				Dados com base em um aparelho de:
			</p>
			<div class="potencia-btu">
				<p class="numeros-potencia">18.000</p>
				<p class="unidade-potencia">BTUs</p>
			</div>
			<p class="account-data-main-text">
				Considerando um consumo médio de:
			</p>
			<div class="consumo-medio">
				<p class="numeros-hora-consumo">8</p>
				<p class="texto-consumo"> horas por 30 dias</p>
			</div>
		</div>
		<div class="content-money">
			<div class="box-money">

				<p class="title">
					AR-CONDICIONADO SPLIT <span>CONVENCIONAL</span>
				</p>
				<img src="./img/money-left2.png" class="image-money-left">
				<div class="money">
					<span>R$</span>
					<p class="money-container">
						<span class="money-valor">161</span>
						<span>,90</span>
					</p>
					<span class="custo-mensal">Custo mensal*</span>
				</div>
			</div>
			<div class="vs-image-container">
				<img src="./img/Img-VS.jpg" class="vs-image">
			</div>
			<div class="box-money money-right">
				<p class="title">
					AR-CONDICIONADO SPLIT <span>INVERTER</span>
				</p>
				<img class="image-money-right" src="./img/money-left2.png">
				<div class="money-right">
					<span>R$</span>
					<p class="money-container-right">
						<span class="money-valor-right">97</span>
						<span>,14</span>
					</p>
					<span class="custo-mensal-right">Custo mensal*</span>
				</div>
			</div>

			<div class="box-econ-ray">
				<img src="./img/Img-Econ-Ray.jpg" class="image-econ-ray">
				<div class="econ">
					<p class="econ-main-text">
						AR-CONDICIONADO INVERTER PODE GARANTIR ATÉ:
					</p>
					<p class="econ-number">
						40%
					</p>
					<p class="econ-text">
						de economia
					</p>
				</div>
				<p class="little-text">
					*Cálculos baseados na tarifa de energia com valor de R$ 1,04 kWh para cidade de São Paulo, em 2022.
				</p>
			</div>

		</div>
		<div class="buy-desk">
			<p>Portanto, utilizando um aparelho inverter você pode garantir em média:</p>
			<div class="buy-container">
				<div class="economia-por-container">
					<span>ECONOMIA POR MÊS</span>
					<div class="coin-number">
						<img src="./img/Img-coin.jpg" class="coin-image">
						<p>R$ 65,00</p>
					</div>
					<span>ECONOMIA POR ANO</span>
					<div class="coin-number">
						<img src="./img/Img-coin.jpg" class="coin-image">
						<p>R$ 780,00</p>
					</div>
				</div>
				<div class="overlay-buy">
					<span> Com esse valor, seria possível comprar até*: </span>
					<div class="buy-content">
						<div class="item">
							<img src="./img/buy-01.svg">
							<p>10 sanduicheiras</p>
						</div>
						<div class="item">
							<img src="./img/buy-02.svg">
							<p>Ir ao cinema <br> 25 vezes</p>
						</div>
						<div class="item">
							<img src="./img/buy-03.svg">
							<p>7 liquidificador</p>
						</div>
						<div class="item">
							<img src="./img/buy-04.svg">
							<p>5 mesa de <br> cabeceira</p>
						</div>
						<div class="item">
							<img src="./img/buy-05.svg">
							<p>Encher 1,8 <br> tanques <br> de gasolina</p>
						</div>
					</div>
					<p>*Para a comparação, foram utilizados preços baseados na média de valor do mercado.</p>
				</div>
			</div>
		</div>
		<div class="buy">
			<div class="buy-container">
				<p>Portanto, utilizando um aparelho inverter você pode garantir em média:</p>
				<div class="economia-por-container">
					<span>ECONOMIA POR MÊS</span>
					<div class="coin-number">
						<img src="./img/Img-coin.jpg" class="coin-image">
						<p>R$ 65,00</p>
					</div>
					<span>ECONOMIA POR ANO</span>
					<div class="coin-number">
						<img src="./img/Img-coin.jpg" class="coin-image">
						<p>R$ 780,00</p>
					</div>
				</div>
				<div class="overlay-buy">
					<span> Com esse valor, seria possível comprar até*: </span>
					<div class="buy-content">
						<div class="item">
							<img src="./img/buy-01.svg">
							<p>10 sanduicheiras</p>
						</div>
						<div class="item">
							<img src="./img/buy-02.svg">
							<p>Ir ao cinema <br> 25 vezes</p>
						</div>
						<div class="item">
							<img src="./img/buy-03.svg">
							<p>7 liquidificador</p>
						</div>
						<div class="item">
							<img src="./img/buy-04.svg">
							<p>5 mesa de <br> cabeceira</p>
						</div>
						<div class="item">
							<img src="./img/buy-05.svg">
							<p>Encher 1,8 <br> tanques <br> de gasolina</p>
						</div>
						<p>*Para a comparação, foram utilizados preços baseados na média de valor do mercado.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="instalacao-container">
			<div class="faixa-titulo-container-account">
				<img class="faixa-titulo-account-desk" src="./img/Faixa-Titulo-sessao-desk.png?v=caching15062022">
				<img class="faixa-titulo-account" src="./img/Faixa-Titulo-sessao-mob.png?v=caching15062022">
				<p class="faixa-titulo-account-text">
					INVISTA EM UM PROFISSIONAL DE INSTALAÇÃO
				</p>
			</div>
			<div class="instalacao-box">
				<div class="image-logo">
					<img class="instalacao-image" src="./img/IMG-Instalador-Agyx.jpg?v=caching15062022">
					<img class="agyx-logo" src="./img/Logo-Agyx.jpg?v=caching15062022">
				</div>
				<p>Para obter o melhor desempenho, durabilidade e a garantia do fabricante para o seu ar-condicionado,
					ele precisa ser instalado por uma empresa especializada neste serviço. A <strong>Agyx</strong>
					fornece a instalação e manutenção ideal para o seu aparelho.</p>
				<p>Com uma rede de profissionais altamente capacitados, a <strong>Agyx</strong> oferece um serviço com
					agendamento e disponibiliza até seis meses de garantia do seu trabalho.</p>
			</div>
			<div class="instalacao-box-desk">
				<div class="image-logo">
					<img class="instalacao-image" src="./img/IMG-Instalador-Agyx.jpg?v=caching15062022">
				</div>
				<img class="wind-agyx" src="./img/Wind-Agyx.png?v=caching15062022">
				<div class="instalacao-text">
					<img class="agyx-logo" src="./img/Logo-Agyx.jpg?v=caching15062022">
					<p>Para obter o melhor desempenho, durabilidade e a garantia do fabricante para o seu
						ar-condicionado, ele precisa ser instalado por uma empresa especializada neste serviço. A
						<strong>Agyx</strong> fornece a instalação e manutenção ideal para o seu aparelho.
					</p>
					<p>Com uma rede de profissionais altamente capacitados, a <strong>Agyx</strong> oferece um serviço
						com agendamento e disponibiliza até seis meses de garantia do seu trabalho.</p>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include 'includes/footer.php'; ?>