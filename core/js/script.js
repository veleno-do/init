function isExist( Target ){
    if( document.querySelector( Target ) ){
        return true;
    }else{
        return false;
    }
}

document.querySelector( '.yui-el__bar1-search' ).addEventListener( 'click', function(){
    document.querySelector( '.yui-el__bar1' ).classList.toggle( 'stand-by' );
    document.querySelector( '.yui-el__bar1-release' ).addEventListener( 'click', function(){
        document.querySelector( '.yui-el__bar1' ).classList.remove( 'stand-by' );
    } )
} )

document.querySelector( '.yui-el__bar1-gnav' ).addEventListener( 'click', function(){
    document.querySelector( '.yui-el__bar1' ).classList.add( 'gnav' );
    document.body.setAttribute( 'style', 'transform:translateX(300px);transition:.3s;overflow:hidden' );
    document.querySelector( '.yui-el__bar1-release' ).addEventListener( 'click', function(){
        document.querySelector( '.yui-el__bar1' ).classList.remove( 'gnav' );
        document.body.setAttribute( 'style', 'transition:.3s' );
    } )
} )

let task_cont = document.querySelectorAll( '.main__tasks-cont' );

function release(){
    const activeRelease = document.querySelector( '.main__tasks-release.active' );
    const contDetail = document.querySelector( '.main__tasks-cont.detail' );

    activeRelease.onclick = function(){
        this.classList.remove( 'active' );
        contDetail.classList.remove( 'detail' );
        removecard();
    }
}

function addcard(){
    document.querySelector( '.addpop' ).classList.add( 'pop' );
}

function removecard(){
    document.querySelector( '.addpop.pop' ).classList.remove( 'pop' );
}

if( isExist( '.addpop__close' ) ){
    document.querySelector( '.addpop__close' ).addEventListener( 'click', function(){
        document.querySelector( '.main__tasks-release.active' ).classList.remove( 'active' );   
        document.querySelector( '.main__tasks-cont.detail' ).classList.remove( 'detail' );
        document.querySelector( '.addpop.pop' ).classList.remove( 'pop' );
    } )
}

for( var x = 0; x < task_cont.length; x ++ ){
    task_cont[ x ].addEventListener( 'click', function(){
        this.classList.add( 'detail' );
        document.querySelector( '.main__tasks-release' ).classList.add( 'active' );
        release();
        addcard();
    } )
}