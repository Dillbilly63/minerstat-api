# minerstat.com JSON API

<b>Public API</b>

- Worker Statistics
- Revenue
- Online Status

<b>Private API (Soon)</b>

- Reboot, Restart
- Remote Commands

# Public JSON

https://minerstat.com/api/v2/getstat/<b>ACCESSKEY</b>

Response:

<pre>
{
"B1_1060": {
	"general": {
		"worker": "B1_1060",
		"status": "online",
		"client": "ccminer-krnlx",
		"uptime": "4 days 2 hours 56 minutes 7 seconds",
		"uptime_sec": "356167",
		"crypto": "SIGT",
		"crypto_dual": "",
		"pool": " sigt.suprnova.cc:7106 ",
		"pool_dual": ""
	},
	"hashrate": {
		"hashrate": "115.42293",
		"hashrate_unit": "MH",
		"hashrate_dual": "",
		"hashrate_dual_unit": ""
	},
	"shares": {
		"accepted_share": "33497",
		"accepted_dual_share": "0",
		"rejected_share": "49",
		"rejected_dual_share": "0"
	},
	"revenue": {
		"revenue_usd_day": "11.845",
		"revenue_usd_week": 82.915,
		"revenue_usd_month": 355.35,
		"revenue_btc_day": "0.002821",
		"revenue_btc_week": "0.019750",
		"revenue_btc_month": "0.084641"
	},
	"gpuinfo": {
		"gpu_count": "6",
		"gpu1": "72",
		"gpu2": "75",
		"gpu3": "75",
		"gpu4": "75",
		"gpu5": "69",
		"gpu6": "60",
		"gpu7": "",
		"gpu8": "",
		"gpu9": "",
		"gpu10": "",
		"gpu11": "",
		"gpu12": "",
		"gpu13": "",
		"gpu14": "",
		"gpu15": "",
		"gpu16": "",
		"fan1": "91",
		"fan2": "91",
		"fan3": "91",
		"fan4": "91",
		"fan5": "91",
		"fan6": "91",
		"fan7": "",
		"fan8": "",
		"fan9": "",
		"fan10": "",
		"fan11": "",
		"fan12": "",
		"fan13": "",
		"fan14": "",
		"fan15": "",
		"fan16": ""
	},
	"gpuname": {
		"gpu_count": "6",
		"gpu1_name": "GTX 1060 6GB",
		"gpu2_name": "GTX 1060 6GB",
		"gpu3_name": "GTX 1060 6GB",
		"gpu4_name": "GTX 1060 6GB",
		"gpu5_name": "GTX 1060 6GB",
		"gpu6_name": "GTX 1060 6GB",
		"gpu7_name": "",
		"gpu8_name": "",
		"gpu9_name": "",
		"gpu10_name": "",
		"gpu11_name": "",
		"gpu12_name": "",
		"gpu13_name": "",
		"gpu14_name": "",
		"gpu15_name": "",
		"gpu16_name": ""
	}
},
"global": {
"total_gpu": "25",
"total_worker": "4",
"total_online_worker": "4"
},
"list": ["B1_1060"]
}
</pre>

Current API Rules: 6 request's / 1 IP / 1 minute

Idea & Request & Bug Report: api@minerstat.com

© minerstat.com
