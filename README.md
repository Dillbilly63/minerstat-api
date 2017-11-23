# API Documentation

<b>Public API</b>

- Worker Statistics
> GPU Temp / FAN

> Revenue Calculation

> Coin Detect

> Active Pool

- Global Response

<b>Private API (Soon)</b>

- Reboot, Restart
- Remote Commands
- antMiner API

# Public JSON

https://minerstat.com/api/v2/getstat/<b>ACCESSKEY</b>

Response:

<pre>
                  
        {
    "AAcoin": {
        "BTC": {
            "amount": 0.0046858883531838,
            "price": "8167.6075"
        },
        "ETH": {
            "amount": 0.00039646349999999,
            "price": 420.31079927525
        },
        "DCR": {
            "amount": 3.599722639594e-5,
            "price": 42.383267162925
        }
    },
    "AAmain3": {
        "ZEC": {
            "hashrate": 5519
        },
        "ETH": {
            "hashrate": 164.248
        },
        "DCR": {
            "hashrate": 1314.002
        }
    },
    "B1_1060": {
        "general": {
            "worker": "B1_1060",
            "status": "online",
            "client": "ewbf-zec",
            "uptime": "9H 41M",
            "uptime_sec": " 34867",
            "crypto": "ZEC",
            "crypto_dual": "",
            "pool": "equihash.eu.nicehash.com:3357",
            "pool_dual": "",
            "last_sync": "16 seconds",
            "last_sync_sec": "16",
            "last_sync_time": "2017-11-23 22:18:51",
            "current_time": "2017-11-23 22:19:07",
            "dual_mode": "NO",
            "cprice": "319",
            "cprice_dual": null
        },
        "hashrate": {
            "hashrate": "1.865",
            "hashrate_unit": "KH",
            "hashrate_dual": "",
            "hashrate_dual_unit": ""
        },
        "shares": {
            "accepted_share": " 4499",
            "accepted_dual_share": "0",
            "rejected_share": " 12",
            "rejected_dual_share": "0"
        },
        "revenue": {
            "revenue_usd_day": "9.151",
            "revenue_usd_week": 64.057,
            "revenue_usd_month": 274.53,
            "revenue_btc_day": "0.001120",
            "revenue_btc_week": "0.007843",
            "revenue_btc_month": "0.033612",
            "coin_1": 0.0011204240054197,
            "coin_2": 0
        },
        "gpuinfo": {
            "gpu_count": "6",
            "gpu1": 58,
            "gpu2": 64,
            "gpu3": 67,
            "gpu4": 65,
            "gpu5": 57,
            "gpu6": 46,
            "gpu7": 0,
            "gpu8": 0,
            "gpu9": 0,
            "gpu10": 0,
            "gpu11": 0,
            "gpu12": 0,
            "gpu13": 0,
            "gpu14": 0,
            "gpu15": 0,
            "gpu16": 0,
            "fan1": 91,
            "fan2": 91,
            "fan3": 91,
            "fan4": 91,
            "fan5": 91,
            "fan6": 91,
            "fan7": 0,
            "fan8": 0,
            "fan9": 0,
            "fan10": 0,
            "fan11": 0,
            "fan12": 0,
            "fan13": 0,
            "fan14": 0,
            "fan15": 0,
            "fan16": 0
        },
        "gpuname": {
            "gpu_count": "6",
            "gpu1_name": "  GTX 1060 6GB",
            "gpu2_name": "  GTX 1060 6GB",
            "gpu3_name": "  GTX 1060 6GB",
            "gpu4_name": "  GTX 1060 6GB",
            "gpu5_name": "  GTX 1060 6GB",
            "gpu6_name": "  GTX 1060 6GB",
            "gpu7_name": "",
            "gpu8_name": "",
            "gpu9_name": "",
            "gpu10_name": "",
            "gpu11_name": "",
            "gpu12_name": "",
            "gpu13_name": "",
            "gpu14_name": "",
            "gpu15_name": "",
            "gpu16_name": "",
            "test": ""
        }
    },
    
    ..........
    ......
    
    "AAmain": {
        "ZEC": {
            "online": 3
        },
        "ETH": {
            "online": "1"
        },
        "DCR": {
            "online": "1"
        }
    },
    "AAmain2": {
        "ZEC": {
            "hardware": 18
        },
        "ETH": {
            "hardware": 6
        },
        "DCR": {
            "hardware": 6
        }
    },
"user_settings": {
        "ex1": "yes",
        "ex2": "yes"
    },
    "global": {
        "sym": "<i class='fa fa-usd'></i> ",
        "total_gpu": "25",
        "total_worker": "5",
        "total_online_worker": "4",
        "total_revenue_usd_month": "1,153",
        "total_revenue_usd_week": "269",
        "total_revenue_usd_day": "38",
        "total_revenue_usd_month_1": "1153",
        "total_revenue_usd_week_1": "269",
        "total_revenue_usd_day_1": "38",
        "total_revenue_btc_month": 0.14119336660093,
        "total_revenue_btc_week": 0.03294511887355,
        "total_revenue_btc_day": 0.0047064455533643
    },
    "list": [
        "B1_1060",
......
    ]
}
}
</pre>

AAcoin -- > Total Coin mined / 24 Hour with the coin actual price.

AAmain -- > Total Online Workers / COIN

AAmain2 -- > Total Working Hardwares / COIN

AAmain3 -- > Total Hashrate / COIN



Current API Rules: 3 request's / 1 IP / 1 minute


Idea & Request & Bug Report: hello@minerstat.com

© minerstat.com
