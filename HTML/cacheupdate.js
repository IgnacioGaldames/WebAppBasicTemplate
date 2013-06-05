(function(){
	var webappCache = window.applicationCache;
	
	function loaded()
	{
		var h2Title = document.querySelector("h2 a");
		var connectionStatus = ((navigator.onLine) ? 'online' : 'offline');
		
		h2Title.textContent = h2Title.textContent + " - currently: " + connectionStatus;
		document.title = document.title.replace(" | "," - currently: " + connectionStatus + " | ");
		
		switch(webappCache.status)
		{
			case 0:
				console.log("Cache status: Uncached");
				break;
			case 1:
				console.log("Cache status: Idle");
				break;
			case 2:
				console.log("Cache status: Checking");
				break;
			case 3:
				console.log("Cache status: Downloading");
				break;
			case 4:
				console.log("Cache status: Updateready");
				break;
			case 5:
				console.log("Cache status: Obsolete");
				break;
		}
	}
	function updateCache()
	{
		webappCache.swapCache();
		console.log("Cache has been updated due to a change found in the manifest");
	}
	function errorCache()
	{
		console.log("You're either offline or something has gone horribly wrong.");
	}

	window.addEventListener("load", loaded, false);
	webappCache.addEventListener("updateready", updateCache, false);
	webappCache.addEventListener("error", errorCache, false);
})();