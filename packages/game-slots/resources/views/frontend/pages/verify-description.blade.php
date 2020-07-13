<p>
    {{ __('When you open the game page the server generates a secret and a seed and reveals its hash (using HMAC SHA256 algorithm).') }}
    {{ __('The server secret represents initial reels positions.') }}
    {{ __('The server seed is a cryptographically secure random alpha-numeric string.') }}
    {{ __('The hash of these 2 strings helps to ensure that the initial reels positions are not altered after you choose the number of lines and bet amount.') }}
    {{ __('After the game is finished the server secret and the server seed are revealed, so you can easily calculate and verify the hash.') }}
</p>
<p>
    {{ __('When you play a game you can pass an extra custom string - client seed (if it\'s not specified a random number is automatically generated by your browser).') }}
    {{ __('The server will then calculate another hash using the server secret, the server seed and the client seed.') }}
    {{ __('The last 5 chars of this hash (representing a hexadecimal value) will be converted to an integer.') }}
    {{ __('Each digit in this number will result in an extra number of spins on the corresponding reel (from left to right).') }}
    {{ __('Because the client seed can not be predicted by the server the number of extra spins is completely random and hence you can be sure that the game result is fair.') }}
</p>