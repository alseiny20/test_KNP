'''
    cette fonction permet de calculer  Le plus grand palindrome issu de la multiplication de
    deux entiers naturels strictement inférieurs a un nombre donné
    @param minimum la valeur minimale d'un des deux entiers
    @param maximum la valeur maximale d'un des deux entiers
    @ensure minimum et maximum sont des entiers naturels
    @return le plus grand palindrome de l'intervalle [minimum, maximum] ou -1 si aucun palindrome n'est trouvé
'''
def palindromeMaxi(minimum = 100, maximum = 999):
    # initialisation a la valeur maximale conue
    max = -1
    # on teste tous les couples de nombre compris entre 100 et 999
    for i in range(maximum, minimum - 1, -1):
        # on evite l'effet miroir en ne testant pas deux fois le meme couple
        # on s'arete à la valeur max//i+1 plutôt qu'à 100 car on sait que le produit i*j sera inférieur à max
        for j in range(maximum, max//i, -1):
            # on teste si le produit est un palindrome
            # si le produit i*j est inférieur à max, on ne fait pas le test car il est inutile
            if i * j > max and str(i * j) == str(i * j)[::-1]:
                    max = i * j
    return max

if __name__ == '__main__':
    print("Le plus grand palindrome issu de la multiplication de deux entiers naturels strictement inférieurs à 999 est", palindromeMaxi())
    
