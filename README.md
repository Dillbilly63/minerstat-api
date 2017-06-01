# minerstat.com API
PHP, C#, C++, NodeJS

<b>Public API</b>

- Worker Statistics
- Revenue
- Online Status

<b>Private API</b>

- Reboot, Restart
- Remote Commands

# Public JSON

https://minerstat.com/api/getstat/<b>ACCESSKEY</b>

Response:

<pre>
[{"total_online_worker":"4"},{"total_worker":"4"},{"total_gpu":"23"},
{"worker":"B1_1060","status":"online","client":"ewbf-zec","crypto":"ZEC","crypto2":"","hashrate":"1.676 KH","hashrate2":" ","shares":"1|1","shares2":"","gpu":"56 |68 |72 |73 |73 |65 |","fan":"87 |87 |87 |87 |87 |87 |","revenue24":"20.99"},
{"worker":"B2_1060","status":"online","client":"ewbf-zec","crypto":"ZEC","crypto2":"","hashrate":"1.688 KH","hashrate2":" ","shares":"1|1","shares2":"","gpu":"59 |67 |59 |60 |64 |62 |","fan":"8|8|8|8|8|8|","revenue24":"21.15"},
{"worker":"RIG1","status":"online","client":"claymore-eth","crypto":"ETH","crypto2":"PASC","hashrate":"165.057 MH","hashrate2":"1320.473 MH","shares":"847 \/ 2 ","shares2":"786 \/ 2 ","gpu":"59|63|59|61|58|62|","fan":"29|72|71|72|0|71|","revenue24":"33.7544"},
{"worker":"RIG2_1060","status":"online","client":"ewbf-zec","crypto":"ZEC","crypto2":"","hashrate":"1.924 KH","hashrate2":"1320.473 MH","shares":"1|1","shares2":"","gpu":"69 |64 |73 |66 |72 |74 |76 \u00b0C\/","fan":"9|9|9|9|9|9|9 \/","revenue24":"24.1"}]
</pre>


The API will be impoved in the days.. with examples..

minerstat.com
