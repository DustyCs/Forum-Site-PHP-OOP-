import profilePic from './assets/Teiara.png'

function Card(){
    
    return(
        <div className="card">
            <img className="card-image" src={profilePic} alt="IMG" /> 
            {/* "https://gratisography.com/photo/cyber-kitty/"*/}
            <h2 className="card-title">DustyCS</h2>
            <p className="card-text">Studying react for now</p>
        </div>
    );
}

export default Card