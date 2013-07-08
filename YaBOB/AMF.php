<?php

class YaBOB_AMF {
	
	public function buildAMF($data)
	{
		var_dump($data);
		$data = amf3_encode($data);
		return pack('H*', sprintf("%08x", strlen($data))) . $data;
	}
		
}