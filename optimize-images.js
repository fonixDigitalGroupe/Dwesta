import imagemin from 'imagemin';
import imageminMozjpeg from 'imagemin-mozjpeg';
import imageminPngquant from 'imagemin-pngquant';
import fs from 'fs';
import path from 'path';

async function optimizeImages() {
    console.log('🖼️  Optimisation des images en cours...');
    
    try {
        // Créer le dossier optimisé s'il n'existe pas
        const optimizedDir = 'public/images-optimized';
        if (!fs.existsSync(optimizedDir)) {
            fs.mkdirSync(optimizedDir, { recursive: true });
        }
        
        // Optimiser les images
        const files = await imagemin(['public/images/**/*.{jpg,jpeg,png}'], {
            destination: optimizedDir,
            plugins: [
                imageminMozjpeg({ quality: 80 }),
                imageminPngquant({ quality: [0.6, 0.8] })
            ]
        });
        
        console.log(`✅ ${files.length} images optimisées avec succès !`);
        
        // Afficher les économies
        const originalSize = getDirectorySize('public/images');
        const optimizedSize = getDirectorySize(optimizedDir);
        const savings = originalSize - optimizedSize;
        const savingsPercent = ((savings / originalSize) * 100).toFixed(1);
        
        console.log(`📊 Taille originale: ${(originalSize / 1024 / 1024).toFixed(1)} MB`);
        console.log(`📊 Taille optimisée: ${(optimizedSize / 1024 / 1024).toFixed(1)} MB`);
        console.log(`💾 Économies: ${(savings / 1024 / 1024).toFixed(1)} MB (${savingsPercent}%)`);
        
    } catch (error) {
        console.error('❌ Erreur lors de l\'optimisation:', error);
    }
}

function getDirectorySize(dirPath) {
    let totalSize = 0;
    
    function calculateSize(itemPath) {
        const stats = fs.statSync(itemPath);
        if (stats.isDirectory()) {
            const files = fs.readdirSync(itemPath);
            files.forEach(file => {
                calculateSize(path.join(itemPath, file));
            });
        } else {
            totalSize += stats.size;
        }
    }
    
    calculateSize(dirPath);
    return totalSize;
}

optimizeImages();
