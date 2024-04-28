
	<script type="text/javascript">
		// If you are reading this... hi! Nice to see you! 
		// I wanted to add some semi-pleasant non-jarring scrolling 
		// to this page so that it didn't just jump from segment to segment.
		//
		// This is pretty much the most vanilla smooth-scrolling code 
		// I could throw together in 30 seconds. Feel free to steal this 
		// if you want. Consider this to be public domain.
		//
		// -erh, 2024 (in a hurry)
		function smoothlyScroll(ev) {
			if ( ! ev.target?.dataset?.scroll ) {
				return;
			}
			ev.preventDefault();

			const targetEl = document.getElementById(ev.target.dataset.scroll);
			if ( targetEl ) {
				window.scroll({
					top: targetEl.offsetTop,
					behavior: 'smooth',
				})
			}
		}

		document.addEventListener('DOMContentLoaded', () => {
			const links = document.querySelectorAll('a');
			if ( links ) {
				for ( let i = 0; i < links.length; ++i ) {
					const link = links[i];
					if ( link.dataset.scroll ) {
						link.addEventListener('click', smoothlyScroll);
					}
				}
			}
		});
	</script>

	<header>
		<h1>Eric Ryan Harrison</h1>
		<p style="text-align: center; margin-top:-2.3rem; margin-bottom:-0.2rem; margin-left:-15rem; font-size: 1.4rem">builds things</p>
		<nav>
			<ul>
				<li><a href="#startups" data-scroll="startups">Startups</a></li>
				<li><a href="#opensource" data-scroll="opensource">Open Source</a></li>
				<li><a target="_blank" href="https://github.com/blister">Github</a></li>
				<li><a target="_blank" href="https://discord.gg/4vsqB87">Discord</a></li>
			</ul>
		</nav>
	</header>
