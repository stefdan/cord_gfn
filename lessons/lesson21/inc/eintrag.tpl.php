<article>
	<h2><?php echo bereinige($film['titel']); ?></h2>
	<ul>
		<li>
			Veröffentlichung:
			<?php echo formatiereDatum($film['veroeffentlichung']); ?>
		</li>
		<li>
			Dauer:
			<?php echo intval($film['dauer']); ?>
		</li>
		<?php if(!empty($film['genre_id'])): ?>
			<li>
				Genre:
				<?php echo bereinige($film['genre_titel']); ?>
			</li>
		<?php endif; ?>
	</ul>
	<div>
		[ <a
			href="bearbeiten.php?id=<?php echo intval($film['id']); ?>"
		>Bearbeiten</a> ]
		[ <a
			href="loeschen.php?id=<?php echo intval($film['id']); ?>"
		>Löschen</a> ]
	</div>
</article>
