/**
 * 
 */
package justin.util;

/**
 * @author Justin Wu
 * 
 */
public interface Comparator<T> {
	/**
	 * Return the result of comparing t1 and t2.
	 * 
	 * @param t1
	 *            first object.
	 * @param t2
	 *            second object.
	 * @return <ul>
	 *         <li>< 0 if t1 is less than t2,</li>
	 *         <li>=0 if t1 equals t2.</li>
	 *         <li>>0 if t2 is greater than t2.</li>
	 *         </ul>
	 * @throws ClassCastException
	 *             if objects cannot be compared.
	 */
	int compare(T t1, T t2) throws ClassCastException;
}
