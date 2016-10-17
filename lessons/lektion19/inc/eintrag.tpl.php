<article class="eintrag">
	<header class="eintrag_oben">
		<h1><?php  echo bereinige($e['titel']); ?></h1>
	</header>

	<p>
		<?php echo nl2br(bereinige($e['inhalt'])); ?>
	</p>

	<footer class="eintrag_unten">
		<span>
		geschrieben von
		<?php echo $benutzerDaten[$e['autor']]['vorname']; ?>
		<?php echo $benutzerDaten[$e['autor']]['nachname']; ?>
		am
		<time datetime="<?php echo strftime('%Y.%m.%dT%H:%M:S', $e['erstellt_am']); ?>">
			<?php echo strftime('%d.%m.%Y um %H:%M', $e['erstellt_am']); ?>
		</time>
		</span>
	</footer>
</article>

