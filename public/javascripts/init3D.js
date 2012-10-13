function get3D() {

	// set the scene size
	var WIDTH = 800,
	    HEIGHT = 600;

	// set some camera attributes
	var VIEW_ANGLE = 45,
	    ASPECT = WIDTH / HEIGHT,
	    NEAR = 0.1,
	    FAR = 10000;

	// get the DOM element to attach to
	// - assume we've got jQuery to hand
	var $container = $('#leftPane');

	// create a WebGL renderer, camera
	// and a scene
	var renderer = new THREE.WebGLRenderer();
	var camera = new THREE.PerspectiveCamera(  VIEW_ANGLE,
	                                ASPECT,
	                                NEAR,
	                                FAR  );
	var scene = new THREE.Scene();

	// the camera starts at 0,0,0 so pull it back
	camera.position.z = 300;

	// start the renderer
	renderer.setSize(WIDTH, HEIGHT);

	// attach the render-supplied DOM element
	$container.append(renderer.domElement);

	// create the sphere's material
	var material = new THREE.MeshLambertMaterial(
	{
	    color: 0xCC0000
	});

	// set up the sphere vars
	var radius = 50, segments = 16, rings = 16;

	// create a new mesh with sphere geometry -
	// we will cover the sphereMaterial next!
//	var object = getSphere(radius, segments, rings, sphereMaterial);
        var object = getCube(radius, radius, radius, 1, 1, 1, material);

	// add the sphere to the scene
	scene.add(object);

	// create a point light
	var pointLight = new THREE.PointLight( 0xFFFFFF );

	// set its position
	pointLight.position.x = 10;
	pointLight.position.y = 50;
	pointLight.position.z = 130;

	// add to the scene
	scene.add(pointLight);

	// draw!
	renderer.render(scene, camera);
}

function getSphere(radius, segments, rings, material)
{
    material = material || new THREE.MeshLambertMaterial(
	{
	    color: 0xCC0000
	});
	// create a new mesh with sphere geometry -
	// we will cover the sphereMaterial next!
	return new THREE.Mesh(
	   new THREE.SphereGeometry(radius, segments, rings),
	   material);
}

function getCube(height, width, depth, segmentsWidth, segmentsHeight, segmentsDepth, material) {
    var materials = [];
    var i = 6;
    while(i>=0){
        materials[i--] = material;
    }
    return new THREE.Mesh(new THREE.CubeGeometry(height, width, depth, 
        segmentsHeight, segmentsWidth, segmentsDepth, materials), material)
}

function getLogo(){
    var material;
    var logoObject3D = new THREE.Object3D();
    var geom = new THREE.PlaneGeometry(200,200 * (115/460),2,1); 
	//var geom = new THREE.PlaneGeometry(280,280 * (107/529),2,1); 
	
	for(var i =0; i<3; i++)
	{
	
		material = new THREE.MeshBasicMaterial( {
                        map: THREE.ImageUtils.loadTexture( 'http://localhost/sernlabs/public/images/CreativeJSwob2.png' ),  
                    opacity:(i==0)?0.9:
                            (i>=3)?0.012:
                            0.1, 
                    blending :THREE.AdditiveBlending, 
                    depthTest:false,transparent:true});	
	material.opacity = 1*0.3 + 0.5*0.1;
	
		if(i==1) 	geom = new THREE.PlaneGeometry(200,200 * (115/460),1,1); 

//		if(i==1) 	geom = new THREE.PlaneGeometry(280,280 * (107/529),1,1); 

		var logo = new THREE.Mesh(geom, material); 
		logo.position.z=(i>=3)? (i-2)*10 : i*-60;
		logo.position.y=-2;
	
		logoObject3D.add( logo );
//		if(i>0) logoMaterials.push(material); 
//		else logoMaterial = material;
	}
        return logoObject3D;
}

function getRenderer($container, width, height){
    var renderer = new THREE.WebGLRenderer({antialias:true, clearColor:0x000006});

    renderer.setSize(width, height);

    // attach the render-supplied DOM element
    $container.append(renderer.domElement);

    return renderer;
}

function getScene(){
    return new THREE.Scene();
}

function getCamera(viewangle, aspect, far, near, initZ){
    var camera = new THREE.PerspectiveCamera(  viewangle,
                                    aspect,
                                    far,
                                    near  );

    camera.position.z = initZ;
    return camera;
}

function getPointLight(color, x, y, z){
    	// create a point light
	var pointLight = new THREE.PointLight( color );

	// set its position
	pointLight.position.x = x;
	pointLight.position.y = y;
	pointLight.position.z = z
        
        return pointLight;
}

function getCubeMesh(lineColour, lineWidth, lineOpacity) {
	
	var material = new THREE.MeshBasicMaterial( { color: lineColour, wireframe:true, wireframeLinewidth:lineWidth, opacity:lineOpacity, blending :THREE.AdditiveBlending, depthTest:false,transparent:true} ) ;
	
	var cubegeom = new THREE.CubeGeometry(150, 68, 68, 1, 1, 1);
	
	var cube = new THREE.Mesh(cubegeom, material );
	cube.doubleSided = true;
	return cube;
	
}