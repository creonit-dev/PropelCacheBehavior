protected $cached = [];
protected function cache($key, Closure $closure){

	if(array_key_exists($key, $this->cached)){
		return $this->cached[$key];
	}

	return $this->cached[$key] = $closure();
}

protected static $staticCached = [];
protected static function staticCache($key, Closure $closure){

	if(array_key_exists($key, static::$staticCached)){
		return static::$staticCached[$key];
	}

	return static::$staticCached[$key] = $closure();
}