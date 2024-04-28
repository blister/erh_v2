<?php 
	global $__painfree_start_time;
?>
        <footer class="py-5 bg-dark">
			<hr>
			<p>
				Made using <a href="https://github.com/Programming-is-Easy/PHPainfree">PHPainfree</a>, 
				<a href="https://htmx.org">htmx</a>, and 
				<a href="https://github.com/wintermute-cell/magick.css">magick.css</a>
			</p>
			<p>
				Copyright &copy;<?= date('Y'); ?> Eric Ryan Harrison
			</p>
			<p>
				<a href="https://github.com/blister">Github</a>, 
				<a href="https://discord.gg/4vsqB87">Discord</a>, 
				<a href="https://cofounderos.com/user/1">CofounderOS</a>, 
				<a href="https://twitter.com/blister">Twitter</a>, 
				<a href="https://linkedin.com/in/ericryanharrison">LinkedIn</a>
			</p>
			<p>
				<code class="text-light">Page generated in: <span class="text-info"><?= sprintf('%0.4f', (microtime(true) - $__painfree_start_time)) . 's'; ?></span> 🔥🔥</code>
			</p>
        </footer>
