'''
    cette fonction permet de calculer la somme des termes pairs de la suite de Fibonacci
    @return la somme des termes pairs de la suite de Fibonacci inferieur a 4 millions
'''
def fibonaciSomPaire(maximum = 4000000):
    # initialisation de la suite de fibonacci
    first, seconde = 1,2
    somme = 0
    # on teste si la valeur est inferieur a 4 millions
    while seconde < maximum:
        # on teste si la valeur est paire
        if seconde % 2 == 0:
            somme += seconde
        # on avance d'un terme
        first, seconde = seconde, first + seconde
    return somme

if __name__ == '__main__':
    print("La somme des termes pairs de la suite de Fibonacci inferieur a 4 millions est", fibonaciSomPaire())
