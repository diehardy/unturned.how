<?php


require_once ('../../php/modules/header.php');

printHeader('Explore a comprehensive collection of Unturned commands on our dedicated page, covering everything from commands.dat file instructions to in-game and console commands, as well as essential server commands for an immersive gaming experience.', 'Unturned commands', 'Explore a comprehensive collection of Unturned commands on our dedicated page, covering everything from commands.dat file instructions to in-game and console commands, as well as essential server commands for an immersive gaming experience.');
?>

<main class="main">

<h2 class="feedback__title">Commands</h2>
<h3 class="subtitle">In-game unturned commands</h3>
<table class="main__table">
<thead>
            <tr>
            <th>Command</th>
            <th>Example</th>
            <th>Description</th>
            </tr>
</thead>
<tbody>
<tr>
<td >/give [item ID]</td>
<td>/give 81</td>
<td>Facilitates the act of providing a specific item to a player</td>
</tr>
<tr>
<td>/vehicle [vehicle ID]</td>
<td>/vehicle 13</td>
<td>Delivers a specific vehicle to the assigned player.</td>
</tr>
<tr>
<td>/experience [amount]</td>
<td>/experience 5000</td>
<td>Provides a specific amount of experience points to the player.</td>
</tr>
<tr>
<td>/teleport [target]</td>
<td>/teleport wp</td>
<td>Initiates the teleportation to specific map coordinates or to a designated player.</td>
</tr>
<tr>
<td>/time</td>
<td>/time 360</td>
<td>Assigns the current time of the day-night cycle, in seconds.</td>
</tr>
<tr>

<tr>
<td>/night</td>
<td>/night</td>
<td>Initiates the setting of nighttime. Can be used in a console.</td>
</tr>
<tr>
<td>/day</td>
<td>/day</td>
<td>Initiates the setting of daytime. Can be used in a console.</td>
</tr>
<tr>
<td>/kill [player]</td>
<td>/kill dihardy</td>
<td>Eliminates the specified player. Can be used in a console.</td>
</tr>
<tr>
<td>/animal [animal ID]</td>
<td>/animal 1</td>
<td>Summons the chosen animal to the game world.</td>
</tr>
<tr>
<td>Flag [SteamID | Player]/[Flag]/[Value]</td>
<td>/flag John/friendly/true</td>
<td>Sets the "friendly" flag to true for the player named John. If no player is specified, the flag is set for the executing player.</td>
</tr>
<tr>
<td>Kick [SteamID | Player]/[Reason]</td>
<td>/kick dihardy spam</td>
<td>Removes a player from the server; leaving the reason blank kicks them with an "unspecified" message. Console-ready.</td>
</tr>
<tr>
<td>Spy [SteamID | Player]</td>
<td>/spy dihardy</td>
<td>Requests a screenshot from the target player and saves it on the caller's computer as Spy.jpg.</td>
</tr>
<tr>
<td>Slay [SteamID | Player]/[Reason]</td>
<td>/slay dihardy/jerk</td>
<td>Eliminates the designated player in-game and issues a permanent ban. If a player is specified without optional parameters, the banned duration defaults to 31,536,000 seconds (365 days) for an "unspecified" reason.
</td>
</tr>
<tr>
<td>Weather [None | Disable | Storm | Blizzard | GUID]</td>
<td>/weather storm</td>
<td>Controls the current weather cycle.
</td>
</tr>
<tr>
<td>UnlockNpcAchievement [SteamID | Player]/[AchievementID]</td>
<td>/UnlockNpcAchievement dihardy/2</td>
<td>Bestows a player with the specified achievement. Only certain achievements are eligible for granting.</td>
</tr>
<tr>
<td>Unpermit [SteamID]</td>
<td>/unpermit 7656119XXXXXXXXXX </td>
<td>Excludes the designated player from the list of users allowed to join the server.</td>
</tr>
</tbody>
</table>



<h3 class="subtitle">Console unturned commands</h3>
<table class="main__table">
<thead>
            <tr>
            <th>Command</th>
            <th>Example</th>
            <th>Description</th>
            </tr>
</thead>
<tbody>
<tr>
<td>Admin [SteamID | Player]</td>
<td>admin dihardy</td>
<td>Grants administrator privileges to the player named John.</td>
</tr>
<tr>
<td>Ban [SteamID | Player]</td>
<td>ban dihardy</td>
<td>Issues a ban to the specified player.</td>
</tr>
<tr>
<td>Bans</td>
<td>bans</td>
<td>Initiates a search for a comprehensive list of banned players.</td>
</tr>
<tr>
<td>CopyServerCode</td>
<td>CopyServerCode</td>
<td>Copies your server code to share it with your friends and play together.</td>
</tr>
<tr>
<td>EffectUI</td>
<td>EffectUI 24</td>
<td>Initiates the spawning of a UI effect for the executing player.</td>
</tr>
<tr>
<td>Reload</td>
<td>reload</td>
<td>Refreshes an asset identified by its GUID</td>
</tr>
<tr>
<tr>
<td>Reputation</td>
<td>Reputation dihardy/10000</td>
<td>Grants reputation to a specified player. If no player is specified, the executing player receives the reputation.
</td>
</tr>
<tr>
<td>Timeout [50-10000]</td>
<td>timeout 250</td>
<td>Sets a maximum ping threshold for the server, resulting in a client being kicked if their ping exceeds the specified limit. If the command is not provided, it defaults to the value set by Max_Ping_Milliseconds, which is typically 750 milliseconds.
</td>
</tr>
<tr>
<td>Unadmin [SteamID | Player]</td>
<td>unadmin dihardy</td>
<td>Restores the configuration file to its default values.
</td>
</tr>
<tr>
<td>Unban [SteamID]</td>
<td>unadmin 7656119XXXXXXXXXX </td>
<td>Deletes the designated player from the list of prohibited users not allowed to join the server.
</td>
</tr>
<tr>
<td>ResetConfig</td>
<td>resetconfig</td>
<td>Restores the configuration file to its default values.
</td>
</tr>
<tr>
<td>Save</td>
<td>save</td>
<td>Compels a valid save of the server state.
</td>
</tr>
<tr>
<td>Say [Text]/[R]/[G]/[B]</td>
<td>say text/255/255/255</td>
<td>Conveys a message to all connected clients through in-game chat. If an RGB color is unspecified, it defaults to 0, 255, 0.</td>
</tr>
<tr>
<td>Debug</td>
<td>debug</td>
<td>Outputs information on the state of the server to the server console.</td>
</tr>
<tr>
<td>Shutdown [Delay]/[Explanation]	</td>
<td>shutdown 600/updating</td>
<td>Saves the server state, disconnects clients, and shuts down the server. If executed without optional parameters, it immediately closes with no explanation to disconnected clients.</td>
</tr>
<tr>
<td>Help</td>
<td>help</td>
<td>Outputs information on commands, to the server console.</td>
</tr>
<tr>
<td>Votify [Vote Allowed Y/N]/[Pass Cooldown]/[Fail Cooldown]/[Vote Duration]/[Vote Percentage]/[Players]	</td>
<td>votify y/20/300/20/24</td>
<td>Enables server voting configuration. By default, voting is completely disabled.
</td>
</tr>
<tr>
<td>Log [Chat Y/N]/[Join/Leave Y/N]/[Death Y/N]/[Anticheat Y/N]	</td>
<td>log y/y/y/y</td>
<td>Assigns the console log options.</td>
</tr>
<tr>
<td>Modules</td>
<td>modules</td>
<td>Generates a roster of the loaded modules and displays it on the server console.</td>
</tr>
<tr>
<td>Permit [SteamID]/[Tag]</td>
<td>permit 7656119XXXXXXXXXX/2</td>
<td>Includes the designated player in the list of allowed server users.
</td>
</tr>
<tr>
<td>Permits</td>
<td>permits</td>
<td>Displays a roster of players authorized to join the server on the server console.
</td>
</tr>
<tr>
<td>Players</td>
<td>players</td>
<td>Shows a list of current players on the server on the server console.</td>
</tr>
<tr>
<td>Quest [SteamID | Player]/[Quest]</td>
<td>quest dihardy/suspected</td>
<td>Assigns a quest flag to a player. If no player is specified, the executing player receives the quest flag.
</td>
</tr>
</tbody>
</table>


<h3 class="subtitle">Commands.dat unturned file</h3>
<table class="main__table">
<thead>
            <tr>
            <th>Command</th>
            <th>Example</th>
            <th>Description</th>
            </tr>
</thead>
<tbody>
<tr>
<td>Name [text]</td>
<td>name MyBestServer</td>
<td>Sets the server name for display on the server list.</td>
</tr>
<tr>
<tr>
<td>Port [Number]</td>
<td>port 27015</td>
<td>Sets the server's port. The server utilizes two consecutive ports: the first for server list queries (relevant to the console command), and the second for in-game traffic. Both ports should be opened on the router.
</td>
</tr>
<tr>
<td>PvE [ON | OFF]</td>
<td>pve on</td>
<td>Turns off player-versus-player combat, favoring player-versus-environment engagements.
</td>
</tr>
<tr>
<td>Owner [SteamID]</td>
<td>owner 7656119XXXXXXXXXX </td>
<td>Sets the server owner.</td>
</tr>
<tr>
<td>Perspective [First | Third | Both | Vehicle]</td>
<td>perspective both</td>
<td>Assigns the perspective of the server.</td>
</tr>
<tr>
<tr>
<td>Password [Text]</td>
<td>password myPass</td>
<td>Sets the password needed to access the server.</td>
</tr>
<tr>
<tr>
<td>Queue_Size [0-64]</td>
<td>Queue_Size	6</td>
<td>Defines the maximum number of queued connections the server is willing to retain.
</td>
</tr>
<tr>
<tr>
<td>Welcome [Text]/[R]/[G]/[B]</td>
<td>welcome hello, there/25/52/255</td>
<td>Defines a welcome message displayed to clients upon connection.
</td>
</tr>
<tr>
<tr>
<td>Whitelisted [ON | OFF]</td>
<td>whitelisted on</td>
<td>Restricts server access to permitted players only.
</td>
</tr>
<tr>
<tr>
<td>Bind[IP]</td>
<td>bind 0.0.0.0</td>
<td>Binds the specified internal IP to the socket.</td>
</tr>
<tr>
<td>Sync [ON | OFF]</td>
<td>sync on</td>
<td>Enables players to synchronize savedata across your servers.</td>
</tr>
<tr>
<td>Chatrate [0-60 in seconds]</td>
<td>chatrate 15</td>
<td>Sets a cooldown of 10 seconds between chat messages.</td>
</tr>
<tr>
<td>Cheats [ON/OFF]</td>
<td>cheats on</td>
<td>Enables the usage of cheat commands.</td>
</tr>
<tr>
<td>Cycle [seconds]</td>
<td>Cycle 3600</td>
<td>Sets the length of the day/night cycle to your period of time.</td>
</tr>
<tr>
<td>Filter</td>
<td>filter</td>
<td>Filters out players with non-English, non-alphanumeric names.</td>
</tr>
<tr>
<td>Mode [EASY | NORMAL | HARD]</td>
<td>mode normal</td>
<td>Assigns the difficulty of the server.</td>
</tr>
<tr>
<tr>
<td>GameMode [Class Name]</td>
<td>gamemode ???</td>
<td>Assigns the game mode of the server.</td>
</tr>
<tr>
<td>Map [Level]</td>
<td>map Yukon</td>
<td>Sets the map that the server loads on startup.</td>
</tr>
<tr>
<tr>
<td>MaxPlayers [1-200]</td>
<td>maxplayers 24</td>
<td>Sets the maximum number of connections the server is willing to accept.</td>
</tr>
<tr>
<td>MaxPlayers [1-200]</td>
<td>maxplayers 24</td>
<td>Sets the maximum number of connections the server is willing to accept.</td>
</tr>
<tr>
<td>Gold [ON/OFF]</td>
<td>gold on</td>
<td>Marks the server as joinable only by Gold members.</td>
</tr>
<tr>
<td>GSLT [Login Token]</td>
<td>GSLT yourtoken</td>
<td>Sets the game server login token.</td>
</tr>
<tr>
<td>Hide_Admins [ON/OFF]</td>
<td>Hide_Admins on</td>
<td>Hides the visibility of admin labels from players.</td>
</tr>
<tr>
<td>Loadout	[SkillsetID]/[ItemID]...</td>
<td>loadout 2/1176</td>
<td>When spawning, grants players the specified item corresponding to their skillset. If the skillset ID is set to 255, it applies to all skillsets.
</td>
</tr>

</tbody>
</table>
</main>
<?php
require_once  ('../../php/modules/footer.php'); ?>


</div>
</body>
</html>