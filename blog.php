<div id="body" class="blog">
	<div>
		<ul>
			<li>
				<span class="bg-top"></span> <a href="#"><img src="images/fotka1.png" alt="fotka novinek 1"></a>
				<div>
					<h3>Náš tým pracantů</h3>
					<p>
						Nedávno jsme předělávali zahradu pana Lukáše Parnického. Naši práci kladně ohodnotil a doporučil
					</p>
					<div>
						<span>24. Března - Vyfoceno Lukášem P.</span> <span>2. Zobrazení</span>
					</div>
				</div>
				<span class="bg-bottom"></span> <span class="triangle"></span>
			</li>
			<li>
				<span class="bg-top"></span> <a href="#"><img src="images/fotka2.png" alt="fotka novinek 2"></a>
				<div>
					<h3>Sázení stromků</h3>
					<p>
						Podpořili jsme YouTubera MrBeast a zasadili 500 stromků. Podpoř naši planetu také!
					</p>
					<div>
						<span>4. Března - Vyfoceno Lucií Š.</span> <span>14. Zobrazení</span>
					</div>
				</div>
				<span class="bg-bottom"></span><span class="triangle"></span>
			</li>
			<li>
				<span class="bg-top"></span> <a href="#"><img src="images/fotka3.png" alt="fotka novinek 3"></a>
				<div>
					<h3>Kolo pro Život!</h3>
					<p>
						Podpořili jsme akci Kolo pro život. Dne 28. Února jsme se projeli na kolech a skončili jsme na krásném 9. Místě
					</p>
					<div>
						<span>28. Února - Vyfoceno Jiřím K.</span> <span>64. Zobrazení</span>
					</div>
				</div>
				<span class="bg-bottom"></span> <span class="triangle"></span>
			</li>
			<li>
				<span class="bg-top"></span> <a href="#"><img src="images/fotka4.png" alt="fotka novinek 4"></a>
				<div>
					<h3>Otevřeli jsme naše první květinářství</h3>
					<p>
						Trvalo to velmi dlouho, ale dočkali jsme se. Konečně jsme otevřeli květinářsví hned za městem.
					</p>
					<div>
						<span>1. Února - Vyfoceno Zdeňkem N.</span> <span>576. Zobrazení</span>
					</div>
				</div>
				<span class="bg-bottom"></span> <span class="triangle"></span>
			</li>
		</ul>
		<!-- Přepínání mezi stránkama -->
		<ul class="paging">
			<li class="selected">
				<a href="#">1</a>
			</li>
		<!--	ODKAZ NA DALŠÍ STRÁNKU
			<li>
				<a href="#2">2</a>
			</li>
		-->
		</ul>
	</div>
	<div class="sidebar">
		<h4>Archív</h4>
		<ul> <!-- Tabulka, pro přidaní více kalendářních obobí-->
			<li class="selected">
				<a href="#">2022</a>
				<?php
				// Přidaný odkaz, pro budoucí filtrování - Zase, lze rozšířit funkce
				$mesice = ["leden"=>"Leden", "unor"=>"Únor", "brezen"=>"Březen", "duben"=>"Duben", "kveten"=>"květen", "cerven"=>"Červen", "cervenec"=>"Červenec", "srpen"=>"Srpen", "zari"=>"Září", "rijen"=>"Říjen", "listopad"=>"Listopad", "prosinec"=>"Prosinec"];

				// automatické vytvoření kalendáře
				foreach ($mesice as $odkaz => $jmenoVMenu) {
					echo "<span>";
					echo "<a href='#$odkaz'>$jmenoVMenu</a>";
					echo "</span>";
				}
				?>
			</li>
		</ul>
	</div>
</div>