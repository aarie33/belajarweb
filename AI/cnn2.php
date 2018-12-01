<?php
function sigmoid ($x ) {
 return 1.0 / (1 + exp(-$x)); 
}

$TOTAL = $NOINPUT+$NOHIDDEN+$NOOUTPUT;

$loi = 0;
$$hii = $NOINPUT-1;
$loj = $NOINPUT;
$$hij = $NOINPUT+$NOHIDDEN-1;
$lok = $NOINPUT+$NOHIDDEN;
$hik = $NOINPUT+$NOHIDDEN+$NOOUTPUT-1;

#define for_i   for ( i=loi; i<=hii; i++ )
#define for_j   for ( j=loj; j<=hij; j++ )
#define for_k   for ( k=lok; k<=hik; k++ )

// class NeuralNetwork
// {
//  int i,j,k;

//  double         I [ TOTAL ];            
//  double         y [ TOTAL ];            
//  double         O [ TOTAL ];    
//  double         w [ TOTAL ] [ TOTAL ];          // w[i][j] 
//  double         wt [ TOTAL ];                   // bias weights wt[i]
                
//  double         dx [ TOTAL ];                   // dE/dx[i] 
//  double         dy [ TOTAL ];                   // dE/dy[i] 
// };
