// import styles from './Button.module.css' // Modular Way

function Button(){
    // inline css
    const styles = {
        backgroundColor: "rgb(115, 156, 129)",
        padding: "1rem",
    }
    return(
        // <button className="button">Click</button>
        // <button className={styles.button}>Click</button> // Modular Way for css
        <button style={styles}>Click</button> // inline css
    );
}

// External for global, small projects
// Modules for invidual components
// Inline for individual, small components with minimal styling

export default Button