<?php

if ( !defined( 'ABSPATH' ) ) {
	http_response_code( 404 );
	die();
}

class chkubiquity extends be_module {
	public $searchname = 'Ubiquity';
	public $searchlist = array(
		// ubiquity IP numbers as of 6/13/2014
		'XSServer',
		array( '46.251.228.0', '46.251.229.255' ),
		array( '109.230.197.0', '109.230.197.255' ),
		array( '109.230.213.0', '109.230.213.255' ),
		array( '109.230.216.0', '109.230.217.255' ),
		array( '109.230.220.0', '109.230.223.255' ),
		array( '109.230.246.0', '109.230.246.255' ),
		array( '109.230.248.0', '109.230.249.255' ),
		array( '109.230.251.0', '109.230.251.255' ),
		'Ubiquity-Nobis',
		array( '108.177.128.128', '108.177.128.255' ),
		array( '108.177.168.0', '108.177.171.255' ),
		array( '108.177.184.0', '108.177.195.255' ),
		array( '108.177.200.0', '108.177.219.255' ),
		array( '108.177.220.0', '108.177.227.255' ),
		array( '108.177.232.0', '108.177.235.255' ),
		array( '108.177.240.0', '108.177.251.255' ),
		array( '108.62.100.0', '108.62.103.255' ),
		array( '108.62.107.0', '108.62.111.255' ),
		array( '108.62.116.0', '108.62.132.255' ),
		array( '108.62.134.0', '108.62.134.255' ),
		array( '108.62.144.0', '108.62.159.255' ),
		array( '108.62.16.0', '108.62.23.255' ),
		array( '108.62.170.0', '108.62.170.255' ),
		array( '108.62.172.0', '108.62.175.255' ),
		array( '108.62.178.0', '108.62.187.255' ),
		array( '108.62.192.0', '108.62.195.255' ),
		array( '108.62.200.0', '108.62.207.255' ),
		array( '108.62.211.128', '108.62.211.255' ),
		array( '108.62.220.0', '108.62.220.127' ),
		array( '108.62.232.0', '108.62.239.255' ),
		array( '108.62.24.0', '108.62.31.255' ),
		array( '108.62.240.0', '108.62.243.255' ),
		array( '108.62.247.80', '108.62.247.87' ),
		array( '108.62.252.0', '108.62.255.255' ),
		array( '108.62.32.0', '108.62.55.255' ),
		array( '108.62.5.0', '108.62.5.255' ),
		array( '108.62.56.0', '108.62.79.255' ),
		array( '108.62.8.0', '108.62.15.255' ),
		array( '108.62.80.0', '108.62.95.255' ),
		array( '142.234.0.0', '142.234.7.255' ),
		array( '142.234.104.0', '142.234.159.255' ),
		array( '142.234.16.0', '142.234.31.255' ),
		array( '142.234.160.0', '142.234.183.255' ),
		array( '142.234.188.0', '142.234.255.255' ),
		array( '142.234.32.0', '142.234.39.255' ),
		array( '142.234.48.0', '142.234.79.255' ),
		array( '142.234.8.0', '142.234.15.255' ),
		array( '142.234.88.0', '142.234.103.255' ),
		array( '142.91.0.0', '142.91.7.255' ),
		array( '142.91.104.0', '142.91.151.255' ),
		array( '142.91.160.0', '142.91.199.255' ),
		array( '142.91.20.0', '142.91.23.255' ),
		array( '142.91.200.0', '142.91.239.255' ),
		array( '142.91.24.0', '142.91.31.255' ),
		array( '142.91.240.0', '142.91.255.255' ),
		array( '142.91.32.0', '142.91.51.255' ),
		array( '142.91.56.0', '142.91.59.255' ),
		array( '142.91.64.0', '142.91.103.255' ),
		array( '147.255.0.0', '147.255.15.255' ),
		array( '147.255.112.0', '147.255.119.255' ),
		array( '147.255.120.0', '147.255.127.255' ),
		array( '147.255.128.0', '147.255.143.255' ),
		array( '147.255.16.0', '147.255.23.255' ),
		array( '147.255.160.0', '147.255.167.255' ),
		array( '147.255.168.0', '147.255.239.255' ),
		array( '147.255.24.0', '147.255.31.255' ),
		array( '147.255.240.0', '147.255.255.255' ),
		array( '147.255.32.0', '147.255.79.255' ),
		array( '147.255.96.0', '147.255.111.255' ),
		array( '172.241.140.192', '172.241.140.255' ),
		array( '172.241.216.0', '172.241.216.255' ),
		array( '172.255.0.0', '172.255.15.255' ),
		array( '172.255.112.0', '172.255.115.255' ),
		array( '172.255.120.0', '172.255.127.255' ),
		array( '172.255.144.0', '172.255.147.255' ),
		array( '172.255.40.0', '172.255.47.255' ),
		array( '172.255.80.0', '172.255.95.255' ),
		array( '173.208.0.0', '173.208.15.255' ),
		array( '173.208.100.0', '173.208.103.255' ),
		array( '173.208.106.0', '173.208.127.255' ),
		array( '173.208.16.0', '173.208.23.255' ),
		array( '173.208.24.0', '173.208.99.255' ),
		array( '173.234.0.0', '173.234.3.255' ),
		array( '173.234.112.0', '173.234.112.255' ),
		array( '173.234.116.0', '173.234.119.255' ),
		array( '173.234.12.0', '173.234.15.255' ),
		array( '173.234.120.0', '173.234.159.255' ),
		array( '173.234.16.0', '173.234.19.255' ),
		array( '173.234.160.0', '173.234.189.255' ),
		array( '173.234.192.0', '173.234.207.255' ),
		array( '173.234.20.0', '173.234.20.255' ),
		array( '173.234.208.0', '173.234.211.255' ),
		array( '173.234.21.0', '173.234.21.255' ),
		array( '173.234.214.0', '173.234.231.255' ),
		array( '173.234.23.0', '173.234.23.255' ),
		array( '173.234.233.200', '173.234.233.215' ),
		array( '173.234.233.48', '173.234.233.55' ),
		array( '173.234.24.0', '173.234.31.255' ),
		array( '173.234.240.0', '173.234.247.255' ),
		array( '173.234.32.0', '173.234.75.255' ),
		array( '173.234.76.0', '173.234.79.255' ),
		array( '173.234.8.0', '173.234.11.255' ),
		array( '173.234.80.0', '173.234.103.255' ),
		array( '174.34.128.0', '174.34.171.255' ),
		array( '174.34.177.200', '174.34.177.207' ),
		array( '174.34.178.128', '174.34.178.135' ),
		array( '174.34.179.0', '174.34.179.255' ),
		array( '174.34.184.208', '174.34.184.215' ),
		array( '174.34.185.248', '174.34.185.255' ),
		'Balticom',
		array( '46.23.32.0', '46.23.47.255' ),
		array( '82.193.64.0', '82.193.95.255' ),
		array( '83.99.128.0', '83.99.255.255' ),
		array( '109.73.96.0', '109.73.111.255' ),
		array( '212.142.64.0', '212.142.127.255' ),
		'FDC Hosting',
		array( '67.159.0.0', '67.159.63.255' ),
		array( '66.90.64.0', '66.90.127.255' ),
		array( '208.53.128.0', '208.53.191.255' ),
		array( '50.7.0.0', '50.7.255.255' ),
		array( '204.45.0.0', '204.45.255.255' ),
		array( '76.73.0.0', '76.73.255.255' ),
		array( '74.63.64.0', '74.63.127.255' ),
		'Exetel Hosting',
		array( '109.230.244.0', '109.230.245.255' ),
		array( '31.214.155.0', '31.214.155.255' ),
		'Virpus Hosting',
		array( '50.115.160.0', '50.115.175.255' ),
		array( '173.0.48.0', '173.0.63.255' ),
		array( '199.119.224.0', '199.119.227.255' ),
		array( '199.180.128.0', '199.180.135.255' ),
		array( '208.89.208.0', '208.89.215.255' ),
		'Peg Tech',
		array( '137.175.0.0', '137.175.127.255' ),
		array( '199.180.100.0', '199.180.103.255' ),
		array( '199.188.104.0', '199.188.111.255' ),
		array( '142.0.128.0', '142.0.143.255' ),
		array( '142.4.96.0', '142.4.127.255' ),
		array( '192.74.224.0', '192.74.255.255' ),
		array( '198.200.32.0', '198.200.63.255' ),
		array( '198.2.192.0', '198.2.255.255' ),
		array( '107.148.0.0', '107.149.255.255' ),
		array( '108.186.0.0', '108.186.255.255' ),
		'Misc Spam Servers',
		array( '74.63.222.74', '74.63.222.74' ),
		array( '86.181.176.121', '86.181.176.121' ),
		array( '98.126.4.202', '98.126.4.202' ),
		array( '98.126.251.234', '98.126.251.234' ),
		array( '188.168.0.0', '188.168.255.255' ),
		array( '81.17.22.21', '81.17.22.21' ),
		array( '66.219.17.212', '66.219.17.212' ),
		array( '46.29.248.0', '46.29.249.255' ),
		array( '74.221.208.0', '74.221.223.255' ),
		array( '109.169.57.204', '109.169.57.204' ),
		array( '184.22.139.0', '184.22.139.255' ),
		array( '99.187.246.108', '99.187.246.108' ),
		array( '195.62.24.0', '195.62.25.255' ),
		array( '141.105.65.151', '141.105.65.151' ),
		array( '146.0.74.0', '146.0.74.255' ),
		array( '194.28.112.0', '194.28.115.255' ),
		array( '159.224.130.96', '159.224.130.96' ),
		array( '162.244.8.0', '162.244.15.255' )
	);
}

?>