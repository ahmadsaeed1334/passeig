<div class="floating-menu-wrapper">
	<button id="mainActionButton" class="main-action-btn">
		<i class="fa fa-plus"></i>
	</button>
	<div class="floating-actions">
		<a href="#" class="floating-action-btn">
			<i class="fa fa-question-circle"></i>
		</a>
		<a href="#" class="floating-action-btn">
			<i class="fa fa-book"></i>
		</a>
		<a href="#" class="floating-action-btn">
			<i class="fa fa-user-circle"></i>
		</a>
		<a href="#" class="floating-action-btn">
			<i class="fa fa-info-circle"></i>
		</a>
	</div>
</div>
<style>
	.floating-menu-wrapper {
		position: fixed;
		bottom: 2rem;
		right: 2rem;
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.main-action-btn {
		width: 4rem;
		height: 4rem;
		background-color: #225260;
		color: white;
		border: none;
		border-radius: 50%;
		box-shadow: 0px 5px 15px rgba(34, 82, 96, 0.5);
		cursor: pointer;
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: 1.5rem;
		transition: all 0.3s ease;
	}

	.main-action-btn:hover {
		background-color: #225260;
		box-shadow: 0px 8px 20px rgba(34, 82, 96, 0.7);
		transform: rotate(45deg);
	}

	.floating-actions {
		display: flex;
		flex-direction: column;
		align-items: center;
		position: absolute;
		bottom: 4.5rem;
		opacity: 0;
		transform: scale(0);
		transform-origin: bottom center;
		transition: all 0.3s ease;
	}

	.floating-action-btn {
		width: 3.5rem;
		height: 3.5rem;
		background-color: #645242;
		color: white;
		border-radius: 50%;
		display: flex;
		justify-content: center;
		align-items: center;
		box-shadow: 0px 3px 10px rgba(100, 82, 66, 0.5);
		margin-bottom: 0.5rem;
		font-size: 1.3rem;
		transition: all 0.3s ease;
	}

	.floating-action-btn:hover {
		background-color: #645242;
		transform: translateY(-5px);
	}
</style>
<script>
	document.getElementById('mainActionButton').addEventListener('click', function() {
		const actions = document.querySelector('.floating-actions');
		const isExpanded = actions.style.transform === 'scale(1)';

		if (isExpanded) {
			actions.style.transform = 'scale(0)';
			actions.style.opacity = '0';
		} else {
			actions.style.transform = 'scale(1)';
			actions.style.opacity = '1';
		}
	});
</script>
